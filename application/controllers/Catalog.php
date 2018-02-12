<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        // get food in each category from the model
        // TODO: replace test data with actual data from model
        $catalogMain = ['main 1', 'main 2', 'main 3', 'main 4'];
        $catalogSushi = ['sushi 1', 'sushi 2', 'sushi 3', 'sushi 4'];
        $catalogSide = ['side 1', 'side 2', 'side 3', 'side 4'];
        $catalogSalad = ['salad 1', 'salad 2', 'salad 3', 'salad 4'];

        // prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table border="1" tableclass="catalog">',
            'cell_start' => '<td class="image">',
            'cell_alt_start' => '<td class="image">'
        );
        $this->table->set_template($parms);

        // generate the table
        $rows = $this->table->make_columns($catalogMain, 4);
        $this->data['maintable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($catalogSushi, 4);
        $this->data['sushitable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($catalogSide, 4);
        $this->data['sidetable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($catalogSalad, 4);
        $this->data['saladtable'] = $this->table->generate($rows);

        $this->data['pagebody'] = "catalog";
        $this->render();
    }

}
