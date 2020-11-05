<?php
session_start();
$title = "Login";
include 'header.php';
include 'View/eventview.php';
include 'Controller/eventcontr.php';

if(isset($_POST['delete'])){
    $d = new Eventcontr();
    $d->delete($_POST['delete']);
}

$event = new Eventview();
$e = $event->eventDetail();

foreach ($e as $detail) {

?>

    <div class="container border mt-4 w-60 test">
        <h3 class="text-center">Event List</h3>

        <div class="card formcontainer">
            <table border="1" align="center">
                <tr>
                    <th>Title</th>
                    <th>Theme Type</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Venue</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>

                <tr>
                    <td><?php echo $detail['e_title'] ?></td>
                    <td><?php echo $detail['e_type'] ?></td>
                    <td><?php echo $detail['e_date'] ?></td>
                    <td><?php echo $detail['e_time_start'] ?></td>
                    <td><?php echo $detail['e_time_end'] ?></td>
                    <td><?php echo $detail['e_venue'] ?></td>
                    <td><?php echo $detail['e_description'] ?></td>
                    <td>
                        <form action="" method="post"><button type="submit" name="delete" value="<?php echo $detail['e_id'] ?>">Delete</button></form>
                    </td>
                </tr>
            </table>

        </div>

    </div>

<?php } ?>

</body>

</html>