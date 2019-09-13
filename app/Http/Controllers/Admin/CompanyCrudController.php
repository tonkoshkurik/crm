<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Company;
use App\Http\Requests\Admin\CompanyRequest as StoreRequest;
use App\Http\Requests\Admin\CompanyRequest as UpdateRequest;

class CompanyCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        
        $this->crud->setModel(Company::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/company');
        $this->crud->setEntityNameStrings(trans('models.company.singular'), trans('models.company.plural'));

        /*
        |--------------------------------------------------------------------------
        | OPTIONAL CRUD SETTINGS
        |--------------------------------------------------------------------------
        */
        
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        
        /*
        |--------------------------------------------------------------------------
        | CRUD COLUMNS
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
    [
        'type' => 'text',
        'name' => 'title',
    ],
    [
        'type' => 'text',
        'name' => 'description',
    ],
]);

        /*
        |--------------------------------------------------------------------------
        | CRUD FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->addFields([
    [
        'type' => 'text',
        'name' => 'title',
    ],
    [
        'type' => 'summernote',
        'name' => 'description',
    ],
]);

        /*
        |--------------------------------------------------------------------------
        | CRUD FILTERS
        |--------------------------------------------------------------------------
        */

        //
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
