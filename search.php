<?php 
    if(!isset($_SESSION["ID"])) {
        session_start();
    }
    if(!isset($_SESSION["ID"])) {
        header("Location: core/login.php");
    }
    require "settings/templates/header.php";
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
                  <input type="text" class="form-control form-input" placeholder="Search Movies and series">
                </div>
            </div>
        </div>   
    </div>

<?php 
    require "settings/templates/footer.php";
?>