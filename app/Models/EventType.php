<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $table = 'event_type';
    protected $primaryKey = 'id';
    protected $fillable = ['id','type','intro','name','subject','content','img','price','created_at','updated_at'];
}
