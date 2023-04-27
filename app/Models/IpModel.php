<?php
namespace App\Models;
use CodeIgniter\Model;

class IpModel extends Model{
    protected $table = 'visitor';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'ip_address',
      'visitor_counter',
      'created_date',
    ];
}