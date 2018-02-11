<?php

class Bentobox_model extends CSV_Model
{
    function __construct()
    {
        parent::__construct("bentoBoxes.csv");
    }

    public function getBentoBoxes() {
        $bentoBoxes = [];
        foreach($this->all() as $e) {
            $data = $e->data;
            $accessories = [];

            foreach(explode("A", $data["accessories"]) as $a) {
                if(strlen($a) == 0)
                    continue;

                array_push($accessories, (int)$a);
            }

            $data["accessories"] = $accessories;
            $data["code"] = (int)$data["code"];
            array_push($bentoBoxes, $data);
        }

        return $bentoBoxes;
    }

    public function getBentoBox($code) {
        foreach($this->getBentoBoxes() as $b) {
            if($b["code"] == $code)
                return $b;
        }

        return null;
    }

    public function saveBentoBox($bentoBox) {
        //To be implemented later.
    }
}