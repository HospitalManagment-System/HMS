<?php


namespace App\Controllers;


class Doctors extends BaseController
{
    function get_doctors(){
        $db = db_connect();
        $query=$db->query("select * from user join roles on roles.id = user.roleid where roleid = 3");
       foreach ($query->getResultArray() as $data){
            if(empty($data['image'])){
                $image = base_url("assests/icons/profileimg.png");
            }
            else{
                $image = base_url("assests/icons/".$data['image']);
            }

           echo '<div class="card" style="width: 18rem;float: left;margin: 1%;">
  <img class="card-img-top" src="'.$image.'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$data['firstname'].' '.$data['lastname'].'</h5>
    <h6>'.$data['role'].'</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>';
       }

    }
}