<?php

class Bentoaccessory_model extends CI_Model
{
    public function getAccessories($category) {
        return [
           [
               "code" => 1,
               "name" => "Rice",
               "category" => $category,
               "image" => "image.png",
               "price" => 1.20,
               "calories" => 200,
               "weight" => 100,
               "presentation" => 2
           ]
        ];
    }
}