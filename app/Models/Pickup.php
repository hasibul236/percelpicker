<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pickup_location',
        'reciever_name',
        'pincode',
        'phone',
        'rate',
        'weight',
        'barcode',
        'percel_type',
    ];

}
