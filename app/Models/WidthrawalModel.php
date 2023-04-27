<?php

namespace App\Models;
use CodeIgniter\Model;
class WidthrawalModel extends Model
{
    protected $table = 'withdrawal';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'account',
        'bank',
        'amount',
        ];
//   $query = $builder->join('users', 'withdrawal.id = users.id');
}