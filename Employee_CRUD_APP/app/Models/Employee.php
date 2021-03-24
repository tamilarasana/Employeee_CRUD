<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table ='employees';
    // public $timestamp = true;
    protected $fillable = ["name","email","phone","salary","department"];
}
