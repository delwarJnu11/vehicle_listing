<?php
    include './header.php';
    include __DIR__ . '/../../app/classes/VehicleManager.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
            $delete_vehicle = new VehicleManager("", "", "", "");
            $delete_vehicle->delete_vehicle($_GET['id']);
            header("location: ../index.php");
        }
    }
?>


<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>
    <form method="POST">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>





<?php
include './footer.php';
?>