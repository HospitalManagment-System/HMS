<?php


namespace App\Controllers;


use App\Models\Patient_model;

class Patient extends BaseController
{

    public function get_patient(){

   $patient = new Patient_model();

   $data =  $patient->where("pcode" , $_POST['code'] )->orWhere("cnic",$_POST['code'])->find();
    echo json_encode($data);
    }

    public function create_new_pateint(){
        session_start();

        $patient = new Patient_model();
        $data=[
            "pcode" => $_POST['code'],
            "firstname" => $_POST['fname'],
            "lastname" => $_POST['lname'],
            "cnic" => $_POST['cnic'],
            "phone" => $_POST['phone'],
            "address" => $_POST['address'],
            "docid" => $_POST['doctor'],
            "userid" =>   $_SESSION["userid"],
            "reference" => $_POST['refrence'],
            "status" => $_POST['status'],
            "appointment" =>$_POST['date']
        ];

        $patient->set($data)->insert();

        echo "Patient Appointed";
    }

    public function update_patient(){
        $patient = new Patient_model();

        $data=[
            "firstname" => $_POST['fname'],
            "lastname" => $_POST['lname'],
            "cnic" => $_POST['ecnic'],
            "phone" => $_POST['ephone'],
            "address" => $_POST['eaddress']
        ];




       $patient->set($data)->where("pcode" , $_POST['code'] )->orWhere("cnic",$_POST['code'])->update();
        echo "Updated";
    }

}