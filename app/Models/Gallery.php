<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $primaryKey = 'id';
    protected $fillable = ['id','sl','type','name','img','created_at','updated_at'];
}
