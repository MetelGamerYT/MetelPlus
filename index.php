<?php 
    if(!isset($_SESSION["ID"])) {
        session_start();
    }
    if(!isset($_SESSION["ID"])) {
        header("Location: core/login.php");
    }
    require "settings/templates/header.php";
?>
<script src="https://kit.fontawesome.com/b7c91fdb59.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./settings/webmedia/metelplus.png" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
            </li>
        </ul>
    </div>
  </div>
</nav>        
<?php 
    require "settings/templates/footer.php";
?>