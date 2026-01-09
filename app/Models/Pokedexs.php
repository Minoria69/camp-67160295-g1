<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedexs extends Model
{
    use HasFactory;

    // กำหนดชื่อตารางให้ตรงตามโจทย์
    protected $table = 'pokedexs';

    // รายการฟิลด์ข้อมูลตามโจทย์
    protected $fillable = [
        'name', 'type', 'species', 'height', 'weight',
        'hp', 'attack', 'defense', 'image_url'
    ];
}
