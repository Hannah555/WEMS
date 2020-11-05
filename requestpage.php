<?php
session_start();
$title = "Consultant Request";
include 'header.php';
include 'Controller/consultcontr.php';
include 'View/consultview.php';


if(isset($_POST['submit-request'])){

    $date = $_POST['date'];
    $time = $_POST['time'];
    $detail = $_POST['detail'];
    // $uid = $_SESSION['login-id'];
    $cid = $_COOKIE['tempcid'];

    $book = new Consultcontr();
    $book->bookingInfo($time,$date,$detail,$cid);
}
?>


<div class="container border mt-4 w-50 test">
    <h3 class="text-center">Booking Consultation Request</h3><br>
    <div class="card formcontainer">
        <form action="" method="POST">

            <table>
                <tr>
                    <td>Date</td>
                    <td><input type="text" name="date" id="" value="<?php echo date("Y-m-d") ?>" readonly></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="text" name="time" id="" value="<?php echo date("H:i:s") ?>" readonly></td>
                </tr>
                <tr>
                    <td>Detail</td>
                    <td><textarea name="detail" id="" cols="30" rows="10" placeholder="Leave a message..." class="form-control bottom-space" required></textarea></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary bottom-space" name="submit-request">Submit</button>
            <a href="wcHomepage.php">Back</a>

        </form>
    </div>
    </body>

    </html>