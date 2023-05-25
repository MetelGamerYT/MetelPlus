<?php 
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION["ID"])) {
        header("Location: core/login.php");
    }
    require "settings/templates/header.php";
    require "settings/mysql.php";
?>
<script src="https://kit.fontawesome.com/b7c91fdb59.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./settings/webmedia/metelplus.png" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    <?php echo $_SESSION["firstname"] ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="core/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
<br>
<?php         
    $stmt = $con->prepare("SELECT * FROM movies WHERE id = '".$_GET["look"]."'");
    $stmt->execute();
    while($row = $stmt->fetch()) { ?>  
        <h1 class="text-center"><?php echo $row["movie_name"]; ?></h1>
        <div class="container text-center">
            <video class="w-100" controls>
                <source src="media/<?php echo $row["movie_filename"] ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video> 
        </div>
    <?php } 
require "settings/templates/footer.php";
?>