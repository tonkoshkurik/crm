<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ContactRequest as StoreRequest;
use App\Http\Requests\ContactRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ContactCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ContactCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Contact');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contact');
        $this->crud->allowAccess(['list', 'show' ]);
        $this->crud->setEntityNameStrings('contact', 'contacts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
//        $this->crud->setFromDb();
        $this->crud->addColumns([
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text'
            ],
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text'
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email'
            ],
            ["name"=>"phone","type"=>"text","label"=>"Phone"],
            ["name"=>"position","type"=>"text","label"=>"Position"],
            ["name"=>"stage.name","type"=>"text","label"=>"Stage"],
            ["name"=>"notes","type"=>"text","label"=>"Notes"],
            ["name"=>"city","type"=>"text","label"=>"City"],
            ["name"=>"experience","type"=>"text","label"=>"Experience"],
            ["name"=>"salary","type"=>"text","label"=>"Salary"],
            ["name"=>"companies","type"=>"text","label"=>"Companies"],
            ["name"=>"advantages","type"=>"text","label"=>"Advantages"],
            ["name"=>"expectations","type"=>"text","label"=>"Expectations"],
        ]);

        $this->crud->addFields([
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text'
            ],
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text'
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email'
            ],
            [
                "name"=> "stage_id",
                "type"=> "select",
                "label"=> "Stage",
                'entity' => 'stage', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Stage",
            ],
            [
                "name"=> "phone",
                "type"=> "text",
                "label"=> "Phone"
            ],
            [
                "name"=> "position",
                "type"=> "text",
                "label"=> "Position"
            ],
            [
                "name"=> "city",
                "type"=> "text",
                "label"=> "City"
            ],
            [
                "name"=> "experience",
                "type"=> "enum",
                "label"=> "Experience"
            ],
            [
                "name"=> "salary",
                "type"=> "text",
                "label"=> "Salary"
            ],
            [
                "name"=> "english_level",
                "type"=> "enum",
                "label"=> "English level"
            ],
            [
                "name"=> "cv_path",
                "type"=> "upload",
                "upload" => true,
                "label"=> "CV"
            ],
            [
                "name"=> "companies",
                "type"=> "text",
                "label"=> "Companies"
            ],
            [
                "name"=> "advantages",
                "type"=> "text",
                "label"=> "Advantages"
            ],
            [
                "name"=> "expectations",
                "type"=> "text",
                "label"=> "Expectations"
            ],
            [
                "name"=> "notes",
                "type"=> "text",
                "label"=> "Notes"
            ]

        ]);

        // add asterisk for fields that are required in ContactRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
