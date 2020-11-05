<?php
$title = "Login";
include 'header.php';
include 'View/accountview.php';

if(isset($_POST['login-submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $result = new Accountview();
    $result->loggedin($email, $password, $type);
}

?>

<div class="row no-gutters no-gutters">
    <div class="col-md-6">
        <div class="leftside d-flex align-items-center justify-content-center">
            <div class="col-sm-1"></div>
            <div class="col-sm-9 ">
                <p class="title">Wedding Planner</p>
                <p class="subtitle">A place to plan you wedding with our expert!</p>
            </div>

        </div>
    </div>

    <div class="col-md-6 no-gutters">
        <div class="rightside d-flex align-items-center justify-content-center">

            <form action="" class="" method="POST">
                <div class="card formcontainer">
                    <input type="email" class="form-control bottom-space" placeholder="Email" name="email" required>
                    <input type="password" class="form-control bottom-space" placeholder="Password" name="password" required>
                    <select name="type" id="type" class="form-control bottom-space">
                        <option value="user">User</option>
                        <option value="weddingconsultant">Wedding Consultant</option>
                    </select>
                    <button type="submit" class="btn btn-primary bottom-space" name="login-submit">Login</button>
                    <a href="register.php">New here? Register</a>
                </div>

            </form>

        </div>
    </div>
</div>

</body>

</html>