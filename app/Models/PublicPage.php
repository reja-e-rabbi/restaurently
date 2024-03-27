<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicPage extends Model
{
    use HasFactory;
    protected $table = 'landing_page';
    protected $primaryKey = 'id';
    protected $fillable = ['id','type','subject','content','created_at','updated_at'];
}
