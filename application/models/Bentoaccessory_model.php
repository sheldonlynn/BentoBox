<?php

class Bentoaccessory_model extends CSV_Model
{
    function __construct()
    {
        parent::__construct("accessories.csv");
    }

    public function getAccessories($category = null) {

        if($category == null) {
            $accessories = [];
            foreach($this->all() as $e) {
                $data = $e->data;
                $data["code"] = (int)$data["code"];
                $data["category"] = (int)$data["category"];
                $data["price"] = (float)$data["price"];
                $data["calories"] = (int)$data["calories"];
                $data["weight"] = (int)$data["weight"];
                $data["presentation"] = (int)$data["presentation"];
                array_push($accessories, $data);
            }

            return $accessories;
        } else {

            $accessories = [];
            foreach($this->getAccessories() as $b) {
                if($b["category"] == $category)
                    array_push($accessories, $b);
            }

            return $accessories;
        }
    }

    public function getAccessory($code) {
        foreach($this->getAccessories() as $b) {
            if($b["code"] == $code)
                return $b;
        }

        return null;
    }

}