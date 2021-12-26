<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    use HasFactory;
    //ผูกกับตาราง covid19 ใน phpcontroller
    protected $table = "covid19s";
}
