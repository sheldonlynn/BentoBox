<?php

class Bentobox_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBentoBoxes() {
        return [
           [
               "code" => 1,
               "name" => "My Bento Box",
               "accessories" => [
                   1 => 1
               ]
           ]
        ];
    }

    public function getBentoBox($code) {
        return [
            "code" => $code,
            "name" => "My Bento Box",
            "accessories" => [
                "1" => 1
            ]
        ];
    }

    public function saveBentoBox($bentoBox) {
    }
}