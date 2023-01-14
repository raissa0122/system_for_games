<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GameRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use DateTime;

/**
 * Class GameCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GameCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    private $displayConfig =  [
            [
                'label' => 'Name',
                'name'=> 'name',
                'type'=> 'text'
            ],

            [
                'label' => "Description",
                'name' => "description",
                'type' => 'text',
            ],

            [
                'label' => "Date of create",
                'name' => "create_date",
                'type' => 'datetime',
            ],

            [
                'label' => "Genre",
                'name' => "genre_id",
                'type' => 'select',
                'entity' => 'genre',
                'attribute' => 'name',
            ],

            [
                'label' => "Creator",
                'name' => "creator_id",
                'type' => 'select',
                'entity' => 'creator',
                'attribute' => 'name',
            ],

        ];
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Game::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/game');
        CRUD::setEntityNameStrings('game', 'games');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

     protected function setupShowOperation()
     {
         $this->crud->addColumns($this->displayConfig);
     }



    protected function setupListOperation()
    {
        $this->crud->addColumns($this->displayConfig);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(GameRequest::class);

        $this->crud->addFields($this->displayConfig);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        
        CRUD::setValidation(GameRequest::class);

        $this->crud->addFields($this->displayConfig);
    }
}
