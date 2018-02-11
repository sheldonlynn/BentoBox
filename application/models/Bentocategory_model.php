<?php

class Bentocategory_model extends CSV_Model
{
	function __construct()
	{
		parent::__construct("category.csv");
	}

    public function getCategories() {
        $categories = [];
	    foreach($this->all() as $e) {
            $data = $e->data;
	        $data["code"] = (int)$data["code"];
            array_push($categories, $data);
        }

        return $categories;
    }

    //Adds new category, ie:
    //$this->Bentocategory_model->addCategory(["code" => 2, "name" => "asdf"]);
    public function addCategory($category) {
        //To be implemented later.
	}
}