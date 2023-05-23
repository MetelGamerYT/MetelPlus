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
    .form{
        position: relative;
    }
    .form .fa-search{
        position: absolute;
        top:20px;
        left: 20px;
        color: #9ca3af;
    }
    .form-input{
        height: 55px;
        text-indent: 33px;
        border-radius: 10px;
    }
    .form-input:focus{
        box-shadow: none;
        border:none;
    }
    .movie-poster{
        border-radius: 10px 10px 0px 0px;
        max-height: 400px;
    }
    a {
        text-decoration: none;
        color: white;
    }
</style>
<script src="https://kit.fontawesome.com/b7c91fdb59.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./settings/webmedia/metelplus.png" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
                </li>
            </ul>
        </div>
    </div>
</nav> 
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="form">
                  <i class="fa fa-search"></i>
                  <input type="text" class="form-control form-input" placeholder="Search Movies and series" id="movies_searchbar">
                </div>
            </div>
        </div>   
    </div>
    <br>
    <div class="album py-5">
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            <?php 
                $stmt = $con->prepare("SELECT * FROM movies");
                $stmt->execute();
                while($row = $stmt->fetch()){ 
            ?>
            <div class="col" id="<?php echo strtolower($row["movie_name"]) ?>">
                <h6 class="text-center"><?php echo $row["movie_name"]; ?></h6>
                <a class="movie-card" href="watch.php?look=<?php echo $row["id"] ?>">
                    <img src="media/thumbnails/<?php echo $row["movie_thumbnail"] ?>" alt="movie poster" class="movie-poster">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <script>
        document.querySelector('#movies_searchbar').addEventListener('input', filterList)

        function filterList() {
            const searchInput = document.querySelector('#movies_searchbar')
            const filter = searchInput.value.toLowerCase()
            const listItems = document.querySelectorAll('.col')

            listItems.forEach((item) =>{
                let text = item.textContent
                if(text.toLowerCase().includes(filter.toLowerCase())) {
                    item.style.display = ''
                }else {
                    item.style.display = 'none'
                }
            });
        }
    </script>
<?php 
    require "settings/templates/footer.php";
?>