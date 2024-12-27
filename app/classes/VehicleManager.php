<?php

require_once 'VehicleActions.php';
require_once 'VehicleBase.php';
require_once 'FileHandler.php';

class VehicleManager extends VehicleBase implements VehicleActions {

    use FileHandler;

    public function add_vehicle($data) {

        $vehicles = $this->read_file();
        $vehicles[] = $data;

        $this->write_file($vehicles);

    }

    public function edit_vehicle($id, $data) {
        $vehicles = $this->read_file();

        if (isset($vehicles[$id])) {
            $vehicles[$id] = $data;
            $this->write_file($vehicles);
        }

    }

    public function delete_vehicle($id) {

        $vehicles = $this->read_file();
        if (isset($vehicles[$id])) {
            unset($vehicles[$id]);
            $this->write_file(array_values($vehicles));
        }
    }

    public function get_vehicles() {
        return $this->read_file();
    }

    public function get_vehicle($id) {
        $vehicles = $this->read_file();
        return $vehicles[$id];
    }

    public function get_details() {
        return [
            "name"  => $this->name,
            "type"  => $this->type,
            "price" => $this->price,
            "image" => $this->image,
        ];
    }

}