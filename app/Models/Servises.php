<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servises extends Model
{
    use HasFactory;
    protected $table = 'servises';
    protected $primaryKey = 'id';
    protected $fillable = ['id','type','name','subject','content','created_at','updated_at'];
}
