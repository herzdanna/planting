<?php
namespace App\Models;
class UserModel extends \CodeIgniter\Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields =[
        'id','email', 'password',
        'userName' ,'created_at',
        'updated_at','deleted_at',
        'created_by', 'updated_by',
        'deleted_by'
    ];
    protected  $returnType = "Object";
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}