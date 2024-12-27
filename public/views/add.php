<?php

    include_once 'header.php';
    include_once __DIR__ . '/../../app/classes/VehicleManager.php';

    // if(isset($_POST['add'])){
    //     $name = htmlspecialchars(strip_tags())
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $type = htmlspecialchars(strip_tags($_POST['type']));
        $price = htmlspecialchars(strip_tags($_POST['price']));
        $image = htmlspecialchars(strip_tags($_POST['image_url']));

        $data = [
            'name'  => $name,
            'type'  => $type,
            'price' => $price,
            'image' => $image,
        ];

        $newVehicle = new VehicleManager("", "", "", "");
        $newVehicle->add_vehicle($data);
        header("location: ../index.php");

    }

?>

<div class="container  mx-auto my-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="fs-4 fw-medium text-center mb-3">Add Vehicle</h2>
            <hr>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Vehicle Type</label>
                    <input type="text" name="type" class="form-control" id="type" >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Vehicle Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Vehicle Image URL</label>
                    <input type="text" name="image_url" class="form-control" id="image_url">
                </div>

                <input type="submit" name="add" value="Add Vehicle" class="btn btn-primary px-4 py-2 border-0 outline-none">
            </form>
        </div>
    </div>
</div>


<?php

include_once 'footer.php';
?>