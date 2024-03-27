<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableBook extends Model
{
    use HasFactory;
    protected $table = 'tablebook';
    protected $primaryKey = 'id';
    protected $fillable = ['id','sl','cname','cemail','cphone','cdate','ctime','cpeople','message','ctable','statuses','created_at','updated_at'];
}
