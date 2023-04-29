<?php
namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model{

    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'title',
        'full_name',
        'country',
        'city',
        'address',
        'mobile',
        'email',
        'category',
        'product_category',
        'product_name',
        'price',
        'upload_image',
        'des',
        'created_date',
        'ad_status',
        'property_type',
        'property_status',
        'rent_duration',
        'job_status',
        'country_required',
        'resume',
        'c_name',
        'gender',
        'age',
        'qualification',
        'religion',
        'marriage_status',
        'service_type',
        'vehicle_type',
        'vehicle_brand',
        'vehicle_model',
        'visa_ad_status',
        'visa_type',
        'service_status',
    ];
}