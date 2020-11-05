<?php
session_start();
$title = "My Consultation";
include 'header.php';
include 'Controller/consultcontr.php';
include 'View/consultview.php';


if(isset($_POST['back'])){
    header("Location: wcHomepage.php");
}

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
                   
                </tr>

                <tr>
                    <td><?php echo $consult['c_type'] ?></td>
                    <td><?php echo $consult['c_price'] ?></td>
                    <td><?php echo $consult['c_description'] ?></td>
                    
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