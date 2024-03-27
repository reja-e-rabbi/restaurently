<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    use HasFactory;
    protected $table = 'chefs';
    protected $primaryKey = 'id';
    protected $fillable = ['id','sl','type','name','rating','img','twitter','facebook','insta','linkedin','created_at','updated_at'];
}
