<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UsersModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['idUser ','nameUser','pwdUser','emailUser','telUser','sexUser','dateCreateUser'];
}