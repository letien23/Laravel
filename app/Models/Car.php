<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;

class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    protected $fillable=['model','description','produces_on','image','manufacturer_id'];
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id','id');
    }

}
