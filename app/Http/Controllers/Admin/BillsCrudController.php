<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudTrait;

use DB;

use App\Http\Requests\BillsRequest as StoreRequest;
use App\Http\Requests\BillsRequest as UpdateRequest;

class BillsCrudController extends CrudController
{

    use CrudTrait;

    protected $fillable = [
        'people_id',
        'member_activity_id',
        'price_id'
    ];

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
            'name' => 'people_id', // The db column name
            'label' => "Personne", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'member_activity_id', // The db column name
            'label' => "Activités", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'price_id', // The db column name
            'label' => "Prix", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'created_at', // The db column name
            'label' => "Date d'édition", // Table column heading
            'type' => 'Text'
         ]);
        $this->crud->addColumn([
            'name' => 'updated_at', // The db column name
            'label' => "Date de modification", // Table column heading
            'type' => 'Text'
        ]);

        $activities = '';
        $prices = '';
        $id = '';

        $this->crud->setFromDb();

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
            'name' => 'people_id',
            'label' => "people_id",
            'type' => 'hidden',
            'default' => $id,
            ]);
        $this->crud->addField([
            'name' => 'member_activity_id',
            'label' => "Activités",
            'type' => 'hidden',
            'default' => $activities,
            ]);
        $this->crud->addField([
            'name' => 'price_id',
            'label' => "Prix",
            'type' => 'hidden',
            'default' => $prices,
            ]);
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

        $activity = DB::table('member_activities')->where('person_id', $id)->get();
        $activities = "";
        $prices = "";

        foreach($activity as $row){
            $activity_id = $row->activity_id;
            $activities .= ''.$activity_id.',' ;

            $price = DB::table('produits')->select('price')->where('activity_id', $activity_id)->get();
            foreach($price as $row2){
                $price_price = $row2->price;
                $prices .= ''.$price_price.',';
            }

        }

        $date = date('Y-m-d h:i:s');

        DB::table('bills')->insert([
            ['people_id' => $id, 'member_activity_id' => $activities, 'price_id' => $prices, 'created_at' => $date]
        ]);
    }

    public function update(UpdateRequest $request)
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

        $activity = DB::table('member_activities')->where('person_id', $id)->get();
        $activities = "";
        $prices = "";

        foreach($activity as $row){
            $activity_id = $row->activity_id;
            $activities .= ''.$activity_id.',' ;

            $price = DB::table('produits')->select('price')->where('activity_id', $activity_id)->get();
            foreach($price as $row2){
                $price_price = $row2->price;
                $prices .= ''.$price_price.',';
            }

        }

        $bills_id = DB::table('bills')->select('id')->where('people_id', $id)->get();

        foreach($bills_id as $test){
            $bill_id = $test->id;
        }

        $date = date('Y-m-d h:i:s');

        DB::table('bills')->where('id', $bill_id)->update([
            'member_activity_id' => $activities, 'price_id' => $prices, 'updated_at' => $date
        ]);
    }
}
