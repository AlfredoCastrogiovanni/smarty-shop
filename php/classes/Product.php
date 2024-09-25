<?php

class Product {
    private $id;
    private $title;
    private $brand;
    private $image_url;
    private $price;

    public function __construct($id, $title, $brand, $image_url, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->brand = $brand;
        $this->image_url = $image_url;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getImageUrl() {
        return $this->image_url;
    }

    public function getPrice() {
        return $this->price . "€";
    }
}