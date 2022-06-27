<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Manufacturer extends Model
{
    use HasFactory;
    // Định nghĩa lại bảng:
    protected $table='manufacturers';
    protected $fillable=['mf_name'];
    public function cars()
    {
        return $this->hasMany(Car::class,'manufacturer_id','id');
    }
}


// class Car extends Model
// {
//     use HasFactory;
//     public function manufacturer()
//     {
//         return $this->belongsTo('App\Models\Car');
//     }
// }
