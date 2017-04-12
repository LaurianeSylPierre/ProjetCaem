<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudTrait;

use DB;

use App\Http\Requests\BillsFixedRequest as StoreRequest;
use App\Http\Requests\BillsFixedRequest as UpdateRequest;

class BillsFixedCrudController extends CrudController
{

    use CrudTrait;

    public function setUp(){

        $this->crud->setModel("App\Models\BillsFixed");
        $this->crud->setRoute("admin/bills_fixed");
        $this->crud->setEntityNameStrings('facture', 'factures');


        $default = '';

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
            'name' => 'bills_id',
            'label' => "Numéro de facture",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'peoples_id',
            'label' => "peoples_id",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'peoples_name',
            'label' => "peoples_name",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'activities_id',
            'label' => "Activités id",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'activities_name',
            'label' => "Activités",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'activities_prices',
            'label' => "Prix",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'reductions',
            'label' => "Réductions",
            'type' => 'hidden',
            'default' => $default,
            ]);
        $this->crud->addField([
            'name' => 'total',
            'label' => "Total",
            'type' => 'hidden',
            'default' => $default,
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
        $init_name = $_POST['people_name'];
        $family_name = $_POST['people_family_name'];

        $person = DB::table('people')->select('id')->where([
            ["name", "=", $init_name],
            ["family_name", "=", $family_name]
        ])->get();

        foreach($person as $test){
            $id = $test->id;
        }

        $family = DB::table('person_people')->select('person_id')->where([
            ["people_link_id", "=", $id],
        ])->get();

        $family_members = '';
        $names = '';

        foreach($family as $rowFamily){
            $member = $rowFamily->person_id;
            $family_members .= ''.$member.',';

            $name = DB::table('people')->where('id', '=', $member)->get();
            foreach($name as $rowName){
                $names = ''.$rowName->family_name.' '.$rowName->name.',';
            }
        }

        $peoples_id = ''.$id.','.$family_members.'';
        $peoples_name = ''.$family_name.' '.$init_name.','.$names.'';

        $peoples_individual_id = explode(",", $peoples_id);
        array_pop($peoples_individual_id);

        $bills_id = '';
        $activities_id = '';
        $activities_name = '';
        $activities_prices = '';
        $total = '';
        $activities_types = '';


        // Première boucle : on récupère les id des activités selon l'id des personnes concernées
            // Deuxième boucle A :    Avec les id des activités on forme la variable qu'on passera dans l'enregistrement
            //                        On récupère les lignes des activités et les lignes de produits
                // Troisième boucle A :     On récupère les noms des activités pour la variable des activités dans l'insert
                //                          On récupère les id des types d'activité
                //                          On utilise les id des types d'activité pour récupérer le type d'activité
                // Troisième boucle B :     On récupère les prix des produits pour la variable des prix dans l'insert
            // Deuxième boucle B : On récupère l'id de facture dynamique pour les garder liées aux factures fixes
        foreach($peoples_individual_id as $rowId){
            $indiv_activities_id = DB::table('member_activities')->select('activity_id')->where('person_id', '=', $rowId)->get();
            $id_bills = DB::table('bills')->where('people_id', '=', $rowId)->get();
            foreach($indiv_activities_id as $rowIdTable){
                $activities_id .= ''.$rowIdTable->activity_id.',';
                $activities_infos = DB::table('activities')->where('id', '=', $rowIdTable->activity_id)->get();
                $activities_produits = DB::table('produits')->where('activity_id', '=', $rowIdTable->activity_id)->get();
                foreach($activities_infos as $rowActivities){
                    $activities_name .= ''.$rowActivities->name.',';
                    $activities_types .= ''.$rowActivities->type_activity_id.',';
                    $activity_type = DB::table('types_activities')->where('id', '=', $activities_types_id)->get()->toArray();
                    // foreach
                }
                foreach($activities_produits as $rowIdActi){
                    $activities_prices .= ''.$rowIdActi->price.',';
                    $total += $activity_price;
                }
            }
            foreach($id_bills as $rowIdBills){
                $bills_id .= '-'.$rowIdBills->id.'-';
            }
        }


        $reductions = '';
        $age = '';

        $activities_types_table = explode(",", $activities_types);
        array_pop($activities_types_table);

        print_r($activities_types_table);

        // for($q = 0 ; count($peoples_individual_id) > $q; $q++){
        //     $individual = $peoples_individual_id[$q];
        //     $birthday = DB::table('people')->where('id', '=', $individual)->get();
        //     foreach($birthday as $rowBirthday){
        //         $birthdate = $rowBirthday->birthday;
        //         $actual_date = date('Y-m-d');
        //         $age .= $birthdate - $actual_date;
        //     }
        // }
        //     $ages = explode("-", $age);

        //if ((in_array("toto", $les_activite) || in_array("titi", $les_activite)) && in_array("cours", $les_activite))

        echo count($activities_types_table)."<br>";

        // foreach($peoples_individual_id as $individuals_id){
        //     $birthday = DB::table('people')->where('id', '=', $individuals_id)->get();
        //     foreach($birthday as $rowBirthday){
        //         $birthdate = $rowBirthday->birthday;
        //         $actual_date = date('Y-m-d');
        //         $age .= $birthdate - $actual_date;
        //     }
        //     echo("PErsonne  ------------------<br>");
        //
        //         for($n = 0; $n < count($activities_types_table) ; $n++){
        //             $activity_type = DB::table('types_activities')->where('id', '=', $activities_types_table[$n])->get();
        //
        //             foreach($activity_type as $rowActivityType){
        //                 echo $rowActivityType->name."<br><br>";
        //                 if($rowActivityType->name == "Expression Corporelle" || $rowActivityType->name == "Pratiques collectives" ){
        //                     for($p = 0 ; $p < sizeof($activities_types_table) ; $p++){
        //                         $activity_type = DB::table('types_activities')->where('id', '=', $activities_types_table[$p])->get();
        //                         foreach($activity_type as $rowActivityType2){
        //                             if($rowActivityType2->name == "cours"){
        //                                 $reductions = '50%';
        //                             }
        //                         }
        //                     }
        //                 }
        //                 elseif($rowActivityType->name == "Ateliers thématiques" && $age < '26'){
        //                     for($o = 0 ; $o < sizeof($activities_types_table) ; $o++){
        //                         $activities_types_id = $activities_types_table[$o];
        //                         $activity_type = DB::table('types_activities')->where('id', '=', $activities_types_id)->get();
        //                         foreach($activity_type as $rowActivityType2){
        //                             if($rowActivityType2->name == "cours"){
        //                                 $reductions = '50%';
        //                             }
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     }

        foreach($peoples_individual_id as $individuals_id){
            $birthday = DB::table('people')->where('id', '=', $individuals_id)->get();
            foreach($birthday as $rowBirthday){
                $birthdate = $rowBirthday->birthday;
                $actual_date = date('Y-m-d');
                $age .= $birthdate - $actual_date;
            }


            if(in_array("Expression Corporelle", (array)$activity_type[0]) || in_array("Pratiques collectives", (array)$activity_type[0]) && in_array("cours", (array)$activity_type[0])){
                $reductions = '50%';
            }
            elseif(in_array("Ateliers thématiques", (array)$activity_type[0]) && in_array("cours", (array)$activity_type[0]) && $age < '-26'){
                $reductions = '50%';echo $reductions;
            }


            for($n = 0; $n < count($activities_types_table) ; $n++){

                print_r((array)$activity_type[0]);
                echo "<br><br>";
                if(in_array("Expression Corporelle", (array)$activity_type[0]) || in_array("Pratiques collectives", (array)$activity_type[0]) && in_array("cours", (array)$activity_type[0])){
                    $reductions = '50%';
                }
                elseif(in_array("Ateliers thématiques", (array)$activity_type[0]) && in_array("cours", (array)$activity_type[0]) && $age < '-26'){
                    $reductions = '50%';echo $reductions;
                }

            }
        }

        echo $reductions;

        $date = date('Y-m-d h:i:s');

        // DB::table('bills_fixeds')->insert([
        //     ['bills_id' => $bills_id,
        //     'peoples_id' => $peoples_id,
        //     'peoples_name' => $peoples_name,
        //     'activities_id' => $activities_id,
        //     'activities_name' => $activities_name,
        //     'activities_prices' => $activities_prices,
        //     'reductions' => $reductions,
        //     'total' => $total,
        //     'created_at' => $date]
        // ]);
    }

    public function update(UpdateRequest $request)
    {

    }
}
