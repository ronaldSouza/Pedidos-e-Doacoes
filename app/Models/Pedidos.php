<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $table = "pedidos";
    public $timestamps = false;


    // public function requestor()
    // {    
    //     return $this->belongsTo(User::class, 'userId');
    // }   

    

}
