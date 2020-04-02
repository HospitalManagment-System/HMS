<?php namespace App\Controllers;
use App\Models\User_model;
use App\Models\Roles_model;
class User extends BaseController
{
   
   
    public function dashboard(){
session_start();
    if(!empty($_SESSION["userid"])) {

          echo view('templates/header');
        echo view('pages/dashboard');
        echo view('templates/footer');

    }
    
  
if(empty($data)) {
    echo view('pages/login');
}
   
 
 
 
    }

    function get_doctors(){
      $user =  new User_model();
     $data = $user->where('roleid',3)->find();
      $doctors = '<option value="0">Select Doctor</option>';
      foreach ($data as $row){
          $doctors .= '<option value="'.$row['id'].'">'.$row['firstname']. '' .$row['lastname'].'</option>';
      }

      echo $doctors;
    }

    function get_role(){
        $roles =  new Roles_model();
     $roles = $roles->findAll();

     $option = '<option value="0">Select Role</option>';
     foreach($roles as $row){
         $option.= '<option value="'.$row['id'].'">'.$row['role'].'</option>';
     }   
 
 
        echo $option;


    }




    function get_role_by_id(){
        $roles =  new Roles_model();
     $roles = $roles->where("id",$_POST['role'])->find();

        echo $roles[0]['role'];
    }

    function create_role(){
        $roles =  new Roles_model();
        $data = [
            "role" => $_POST['role']
        ];
        $roles->insert($data);
        echo "Role Created";
    }

    function create_user(){
        $user = new User_model(); 

        $data =[
        'employeeid' => $_POST['code'] ,
        'roleid' => $_POST['roleid'],
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname'], 
        'username' => $_POST['email'],
        'password' => $_POST['password']
    ];

    $user->insert($data);

    echo "User Created";

    }

    
    

   
	//--------------------------------------------------------------------

}
