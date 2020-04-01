<?php
/*
* This FIle was automatically generated By Path
* Modify to your advantage
*/

namespace Path\App\Database\Migration;


use Path\Core\Database\Model;
use Path\Core\Database\Prototype;
use Path\Core\Database\Structure;
use Path\Core\Database\Table;



class Author implements Table
{
    public $table_name = "author";
    public $primary_key = "id";
    public function install(Structure &$table)
    {
        $table->column('name')
                ->type('text')
                ->nullable();
        $table->column('age')
            ->type('text')
            ->nullable();
    }

    public function uninstall()
    {
    }

    public function populate(Model $table)
    {

    }

    public function update(Structure &$table)
    {

    }
}