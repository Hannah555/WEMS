<?php
session_start();
$title = "Home";
include 'header.php';
include 'Controller/consultcontr.php';
include 'View/consultview.php';

if (isset($_POST['save-info'])) {
    $id = new Consultview();

    $type = $_POST['type'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $wcid = $id->getwcId();

    if (empty($type) || empty($price)) {
        echo '<script>alert("Please fill in all empty field")</script>';
    } else {
        $r = new Consultcontr();
        $r->consultInfo($type, $price, $description, $wcid);
        echo '<script>alert("Add successfully!")</script>';
    }
}


?>

<div class="container border mt-4 w-50 test">
    <h3 class="text-center">Consultation Info</h3>
    <p class="text-center">Fill in all the required field.</p>

    <div class="card formcontainer">
        <form action="" method="POST">

            <table align="center">
                <tr>
                    <td>Meeting Type</td>
                    <td>
                        <select name="type" id="type" class="form-control bottom-space" required>
                            <option value="Online">Online</option>
                            <option value="f2f">Face To Face</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type=number step=0.01 class="form-control bottom-space" placeholder="Price" name="price" required></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" id="" cols="30" rows="10" placeholder="Description if any..." class="form-control bottom-space"></textarea></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary bottom-space" name="save-info">Save</button>
            <a href="wcHomepage.php">Back</a>

        </form>
    </div>
</div>

</body>

</html>