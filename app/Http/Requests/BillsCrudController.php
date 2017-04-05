<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use DB;

use App\Http\Requests\BillsRequest as StoreRequest;
use App\Http\Requests\BillsRequest as UpdateRequest;

class BillsCrudController extends CrudController
{

    public function setUp(){

        $this->crud->setModel("App\Models\Bills");
        $this->crud->setRoute("admin/bills");
        $this->crud->setEntityNameStrings('facture', 'factures');

        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Numéro de facture", // Table column heading
            	 'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Personne", // Table column heading
            	 'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Activités", // Table column heading
            	 'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Date d'édition", // Table column heading
            		 'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Date de modification", // Table column heading
            	'type' => 'Text'
         ]);

        $this->crud->setFromDb();

        $this->crud->addField([
            'name' => 'id',
            'label' => "Numéro de facture",
            'type' => 'hidden',
            ]);
        $this->crud->addField([
            'name' => 'people_family_name',
            'label' => "Nom",
            'type' => 'text',
            ]);
        $this->crud->addField([
            'name' => 'people_name',
            'label' => "Prénom",
            'type' => 'text',
            ]);
        $this->crud->addField([
            'name' => 'member_activity_id',
            'label' => "Activités",
            'type' => 'hidden',
            // 'default' => $activities,
            ]);
        $this->crud->addField([
            'name' => 'price_id',
            'label' => "Prix",
            'type' => 'hidden',
            // 'default' => $price,
            ]);
        // $this->crud->addField([
        //     'name' => 'reductions',
        //     'label' => "Réductions",
        //     'type' => 'hidden',
        //     ]);
        // $this->crud->addField([
        //     'name' => 'total',
        //     'label' => "Total",
        //     'type' => 'hidden',
        //     ]);
        $this->crud->addField([
            'name' => 'created_at',
            'label' => "date de création",
            'type' => 'hidden',
            ]);
        $this->crud->addField([
            'name' => 'updated_at',
            'label' => "dernier update",
            'type' => 'hidden',
            ]);



    }

    public function store(StoreRequest $request)
    {
        $name = $_POST['people_name'];
        $family_name = $_POST['people_family_name'];

        $person = DB::table('people')->select('id')->where([
            ["name", "=", $name],
            ["family_name", "=", $family_name]
        ])->get();

        foreach($person as $test){
            $id = $test->id;
        }

        $activities = DB::table('member_activities')->where('person_id', $id)->get();
        $price = DB::table('produits')->where('id', $activities);

        // return $name;
        // return $family_name;
        // return $person;
        return $activities;
        return $price;

        // $redirect_location = parent::storeCrud();
        //
        // return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {

        $redirect_location = parent::updateCrud();

        return $redirect_location;
    }
}
