<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Panel;

class Testimonil extends Model
{
    use HasFactory;
    protected $table = 'testimonil';
    protected $primaryKey = 'id';
    protected $fillable = ['id','sl','type','name','user_img_link','profession','country','dilog','img', 'link','created_at','updated_at'];
}
