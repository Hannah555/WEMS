<?php

$title = "User Registration";
include 'header.php';
include 'Controller/accountcontr.php';

if (isset($_POST['uregister-submit'])) {
    $email = $_POST['email'];
    $type = $_POST['type'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];

    $check = new Accountcontr();
    //$check->checkEmail($email);

    if ($password != $repeatpassword) {
        echo '<script>alert("Password not match")</script>';
    } else if ($check->checkEmail($email) > 0) {
        echo '<script>alert("Email already exits")</script>';
    } else {
        $user = new Accountcontr();
        $user->createAccount($email, $password, $type);
        echo '<script>alert("Register successfully")</script>';
        header("Location: login.php");
        exit();
    }
}
?>
<div class="container border mt-4 w-50 test">
    <h3 class="text-center">Registration</h3>
    <p class="text-center">Fill in all the required field.</p>

    <div class="card formcontainer">
        <form action="" method="POST">
            <input type="email" class="form-control bottom-space" placeholder="Email" name="email" required>
            <input type="password" class="form-control bottom-space" placeholder="Password" name="password" required>
            <select name="type" id="type" class="form-control bottom-space">
                <option value="user">User</option>
                <option value="weddingconsultant">Wedding Consultant</option>
            </select>
            <input type="password" class="form-control bottom-space" placeholder="Repeat Password" name="repeatpassword" required>
            <button type="submit" class="btn btn-primary bottom-space" name="uregister-submit">Register</button>
            <a href="login.php">Back</a>
        </form>
    </div>
</div>
</body>

</html>