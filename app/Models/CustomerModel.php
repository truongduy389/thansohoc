<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'customer_id','customer_name','customer_email','customer_phone','customer_gender','customer_date','customer_sochudao','create_at',
    ];
    protected $primaryKey = 'customer_id';
    protected $table = 'customer';
}
