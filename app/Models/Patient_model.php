<?php


namespace App\Models;


use CodeIgniter\Model;

class Patient_model extends Model
{

    protected $defaultGroup = 'default';
    protected $table      = 'patient';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id','pcode','userid','docid','firstname','lastname','cnic','address','phone','reference','status','appointment'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;

}