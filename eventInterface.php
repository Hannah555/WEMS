<?php
session_start();
$title = "Login";
include 'header.php';
include 'Controller/eventcontr.php';
include 'View/eventview.php';



if(isset($_POST['save-event'])){
    $id = new Eventview();

    $title = $_POST['title'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $timestart = $_POST['start-time'];
    $timeend = $_POST['end-time'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $uid = $id->obtainUserId();

    $insert = new Eventcontr();
    $insert->addEvent($title,$type,$date,$timestart,$timeend,$venue,$description,$uid);
}

?>
<div class="container border mt-4 w-50 test">
    <h3 class="text-center">Event</h3>
    <p class="text-center">Fill in all the required field.</p>

    <div class="card formcontainer">
        <form action="" method="POST">

            <table align="center">
                <tr>
                    <td>Title</td>
                    <td><input type="text" class="form-control bottom-space" placeholder="Title" name="title"></td>
                </tr>
                <tr>
                    <td>Theme Type</td>
                    <td>
                        <select name="type" id="">
                            <option value="garden">Garden</option>
                            <option value="fairy-tale">Fairy Tale</option>
                            <option value="holiday">Holiday</option>
                            <option value="great-gatsby">Great Gatsby</option>
                            <option value="romantic-pink">Romantic Pink</option>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" class="form-control bottom-space" placeholder="Event Date" name="date"></td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td><input type="text" class="form-control bottom-space" placeholder="Start: 00:00:00" name="start-time"></td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td><input type="text" class="form-control bottom-space" placeholder="End: 00:00:00" name="end-time"></td>
                </tr>
                <tr>
                    <td>Venue</td>
                    <td><textarea name="venue" id="" cols="30" rows="10" placeholder="Venue" class="form-control bottom-space"></textarea></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control bottom-space"></textarea></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary bottom-space" name="save-event">Save</button>
            <a href="eventList.php">View Event List</a>
            <a href="userHomepage.php">Back</a>
        </form>
    </div>
</div>

</body>
</html>