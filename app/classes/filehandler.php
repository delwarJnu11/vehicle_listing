<?php

trait FileHandler {

    private $file_path = __DIR__ . '/../../data/vehicle.json';

    public function read_file() {
        if (!file_exists($this->file_path)) {
            file_put_contents($this->file_path, json_encode([]));
        }

        return json_decode(file_get_contents($this->file_path), true);

    }

    public function write_file($content) {
        return file_put_contents($this->file_path, json_encode($content,
            JSON_PRETTY_PRINT));
    }
}