<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    // ถ้าชื่อตารางในฐานข้อมูลของคุณไม่ได้ชื่อ "pokedexes" (พหูพจน์)
    // ให้ระบุชื่อตารางที่นี่ เช่น:
    // protected $table = 'pokedex';
}
