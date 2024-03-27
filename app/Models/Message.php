<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = ['id','sl','type','name','email','subject','content','time','date','created_at','updated_at'];
}
