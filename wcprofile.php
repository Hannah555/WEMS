<?php
session_start();
$title = "Profile";
include 'header.php';
include 'Controller/weddingconsultcontr.php';

if (isset($_POST['save-profile'])) {

    $name = $_POST['name'];
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }

    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $accountid = $_SESSION['login-id'];


    $insert = new Weddingconsultcontr();
    $insert->wcprofile($name, $gender, $phone, $experience, $accountid);
    echo '<script>alert("Insert profile successfully")</script>';
}
?>

<div class="container border mt-4 w-50 test">
    <h3 class="text-center">Profile</h3>
    <p class="text-center">Fill in all the required field.</p>

    <div class="card formcontainer">
        <form action="" method="POST">

            <table align="center">
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control bottom-space" placeholder="Name" name="name" required></td>
                </tr>
                <tr>
                    <td rowspan="2">Gender</td>
                    <td><input type="radio" name="gender" value="male" checked> Male</td>

                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="female" required> Female</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" class="form-control bottom-space" placeholder="Phone" name="phone" required></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><textarea name="experience" id="" cols="30" rows="10" placeholder="Experience" class="form-control bottom-space" required></textarea></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary bottom-space" name="save-profile">Save</button>
            <a href="wcHomepage.php">Back</a>
            
        </form>
    </div>
</div>


</body>

</html>