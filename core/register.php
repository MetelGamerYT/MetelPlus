<?php
    if(!isset($_SESSION["ID"])) {
        session_start();
    }
    require("../settings/templates/header.php");
    require("../settings/mysql.php");

    if(isset($_POST["reg_step1to2"])) {
        $_SESSION["reg_email"] = $_POST["reg_email"];
        header("Location: register.php?step=2");
    }
    if(isset($_POST["reg_step2to3"])) {
        $_SESSION["reg_firstname"] = $_POST["reg_firstname"];
        $_SESSION["reg_lastname"] = $_POST["reg_lastname"];
        header("Location: register.php?step=3");
    }
    if(isset($_POST["reg_finish"])) {
        if($_POST["reg_password_first"] == $_POST["reg_password_last"]) {
            $passwordbefore = $_POST["reg_password_first"];
            $passwordafter = password_hash($passwordbefore, PASSWORD_DEFAULT);
            global $con;
            $stmt = $con->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)");
            $stmt->bindParam(":firstname", $_SESSION["reg_firstname"]);
            $stmt->bindParam(":lastname", $_SESSION["reg_lastname"]);
            $stmt->bindParam(":email", $_SESSION["reg_email"]);
            $stmt->bindParam(":password", $passwordafter);
            $stmt->execute();
            header("Location: login.php");
        }
    }
?>
<style>
    html,body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    a {
        text-decoration: none;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<main class="form-signin w-100 m-auto">
    <form method="post">
        <img class="img-fluid" src="../settings/webmedia/metelplus.png">
        <?php if(!isset($_GET["step"])) { ?>
            <h1 class="h3 mb-3 fw-normal">Registration - Step 1/3</h1>

            <div class="form-floating" style="color: black;">
                <input type="email" class="form-control" id="reg_email" name="reg_email">
                <label for="reg_email">Email</label>
            </div>
            <br>        
            <button class="w-100 btn custommetelbutton" type="submit" name="reg_step1to2">Next</button>
        <?php }else { if($_GET["step"] == 2) { ?>
            <h1 class="h3 mb-3 fw-normal">Registration - Step 2/3</h1>

            <div class="form-floating" style="color: black;">
                <input type="text" class="form-control" id="reg_firstname" name="reg_firstname">
                <label for="reg_firstname">First Name</label>
            </div>
            <br>
            <div class="form-floating" style="color: black;">
                <input type="text" class="form-control" id="reg_lastname" name="reg_lastname">
                <label for="reg_lastname">Last Name</label>
            </div>
            <br>        
            <a class="w-50 btn custommetelbutton" href="register.php">Back</a><button class="w-50 btn custommetelbutton" name="reg_step2to3">Next</button>
        <?php }elseif($_GET["step"] == 3) { ?>
            <h1 class="h3 mb-3 fw-normal">Registration - Step 3/3</h1>

            <div class="form-floating" style="color: black;">
                <input type="password" class="form-control" id="reg_password_first" name="reg_password_first">
                <label for="reg_password_first">Password</label>
            </div>
            <br>
            <div class="form-floating" style="color: black;">
                <input type="password" class="form-control" id="reg_password_last" name="reg_password_last">
                <label for="reg_password_last">Password(Repeat)</label>
            </div>
            <br>            
            <a class="w-50 btn custommetelbutton" href="register.php?step=2">Back</a><button class="w-50 btn custommetelbutton" name="reg_finish">Finish</button>
        <?php } } ?>
        <div>
            <p class="text-center">&copy;2023 <a href="login.php">Login</a></p>
        </div>
    </form>
</main>  
<?php
    require("../settings/templates/footer.php");
?>