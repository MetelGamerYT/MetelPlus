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
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100vw;
    height: 100vh;
    font-family: 'roboto', Arial, Helvetica, sans-serif;
    background-color: #0e0e0e;
    overflow-x: hidden;
}

button{
    background: linear-gradient(45deg, #b1060f, #af1b24, #530307);
    border: none;
    font-family: inherit;
    cursor: pointer;
}

.main-header{
    color: lawngreen;
    display: block;
    margin-top: 50px;
    margin-left: 50px;
}

.movie-slider{
    position: relative;
}

.movie-slider::before{
    content: '';
    height: 438px;
    width: 100px;
    display: block;
    position: absolute;
    left: 0;
    z-index: 1;
}

.movie-slider::after{
    content: '';
    height: 438px;
    width: 100px;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
}

.movie-list{
    margin: 30px 0;
    display: flex;
    overflow-y: hidden;
    overflow-x: scroll;
}

.movie-list::-webkit-scrollbar {
    width: 15px;
    height: 10px;
}
   
.movie-list::-webkit-scrollbar-thumb {
    background-color: rgb(61, 61, 61);
    border-radius: 50px;
}

.movie-card{
    background-color: white;
    border-radius: 10px;
    width: 182px;
    box-shadow: 0px 5px 10px rgb(17, 17, 17);
    cursor: pointer;
    margin: 20px 15px;
    position: relative;
    transition: all 1s;
}

.movie-card:hover{
    margin-left: 110px;
    margin-right: 110px;
}

.movie-poster{
    border-radius: 10px 10px 0px 0px;
    max-height: 400px;
}
</style>
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
<br>
<h1 class="text-center">Top Movies Today</h1>
<div class="movie-slider">
    
<div class="movie-list">
    <?php 
        //global $con;
        $stmt = $con->prepare("SELECT * FROM movies");
        $stmt->execute();
        while($row = $stmt->fetch()){ 
    ?>
    <a class="movie-card" href="watch.php?look=<?php echo $row["id"] ?>">
        <img src="media/thumbnails/<?php echo $row["movie_thumbnail"]; ?>" alt="movie poster" class="movie-poster">
    </a>

    <?php } ?>
</div>
</div>
<?php 
    require "settings/templates/footer.php";
?>