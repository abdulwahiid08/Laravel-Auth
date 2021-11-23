<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // mencegah eror defeault value
    // nama variabel harus quarded jika itu kita yng mengipnut
    // jika user yang input maka kita mengunakan fillabel, supaya aman terhindar dari hack.
    protected $fillable = ['list'];
}
