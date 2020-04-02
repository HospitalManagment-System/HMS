<?php namespace App\Models;
use CodeIgniter\Model;

class User_model extends Model {
  protected $defaultGroup = 'default';
  protected $table      = 'user';
  protected $primaryKey = 'id';

  protected $returnType = 'array';
 // protected $useSoftDeletes = true;

  protected $allowedFields = ['id', 'employeeid','roleid' ,'firstname','lastname', 'username','password'];

 protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
   protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = true;
}