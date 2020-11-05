<?php
session_start();
$title = "Consultation";
include 'header.php';
include 'Controller/consultcontr.php';
include 'View/consultview.php';

if (isset($_POST['request'])) {
    $cid = $_POST['request'];
    setcookie("tempcid", $cid);
    header("Location: requestpage.php");
}

if(isset($_POST['back'])){
    header("Location: userHomepage.php");
}

// if(isset($_POST['request'])){
//     $cid = $_POST['request'];
//     $uid = $_SESSION['login-id'];
//     $date = date("Y-m-d");
//     $time = date("h:i:sa");

//     $book = new Consultcontr();
//     $book->boo
// }

$info = new Consultview();
$i = $info->postConsultantInfo();
foreach ($i as $consult) {

?>
    <div class="container border mt-4 w-50 test">
        <h3 class="text-center">Consultant List</h3>

        <div class="card formcontainer">
            <table border="1" align="center">
                <tr>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Request</th>
                </tr>

                <tr>
                    <td><?php echo $consult['c_type'] ?></td>
                    <td><?php echo $consult['c_price'] ?></td>
                    <td><?php echo $consult['c_description'] ?></td>
                    <td> 
                    <form action="" method="post"><button type="submit" class="btn btn-success bottom-space" name="request" value="<?php echo $consult['c_id'] ?>">Request</button></form>
                    </td>
                </tr>
                
            </table>

        </div>
        <form action="" method="POST">
           <button type="submit" name="back" class="btn btn-primary bottom-space">Back</button> 
        </form>
        
    </div>
    

<?php } ?>

</body>

</html>