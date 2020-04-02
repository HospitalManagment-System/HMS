<?php namespace App\Controllers;
use App\Models\User;
use App\Models\User_model;

class Login extends BaseController
{
	public function index($page = "login")
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

    
        echo view('pages/'.$page, $data);
         
    }

   function check_login(){
       session_start();
       $user = new User_model();


       $data = $user->where(array("username" => $_POST['email'] , "password"=> $_POST['password']))->find();

       $_SESSION["userid"]  = $data[0]['id'];

       if(!empty($_SESSION["userid"])) {

           echo view('templates/header');
           echo view('pages/dashboard');
           echo view('templates/footer');

       }
   }
	//--------------------------------------------------------------------

}
