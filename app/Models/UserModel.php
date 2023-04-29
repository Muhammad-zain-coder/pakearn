<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'fname',
      'lname',
      'username',
      'email',
      'mobile',
      'password',
      'refrencer',
      'ticket',
        ];
}