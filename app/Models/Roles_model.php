<?php namespace App\Models;
use CodeIgniter\Model;

class Roles_model extends Model {
  protected $defaultGroup = 'default';
  protected $table      = 'roles';
  protected $primaryKey = 'id';

  protected $returnType = 'array';
 // protected $useSoftDeletes = true;

  protected $allowedFields = ['id', 'role'];

 protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
   protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = true;
}