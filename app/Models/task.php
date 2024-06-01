<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
use HasFactory;
// mendefinisikan data tugas
protected static $tasks =
[
    [
        'id' => 1,
        'name' => 'Bahasa Inggris',
        'deadline' => '24-05-29',
        'status' => 'Belum Selesai',
        'description' => 'Mengerjakan Tugas Bahasa Inggris',
    ],
    [
        'id' => 2,
        'name' => 'Matematika',
        'deadline' => '24-05-30',
        'status' => 'Belum Selesai',
        'description' => 'Mengerjakan Tugas Matematika',
    ],
    [
        'id' => 3,
        'name' => 'Fisika',
        'deadline' => '24-05-31',
        'status' => 'Belum Selesai',
        'description' => 'Mengerjakan Tugas Fisika, maka tugas Fisika yang berisi dari Pilihan Ganda, Isian dan Esai wajib diisi',
    ],
];

// method untuk mendapatkan semua data tugas
public static function getAll(){
    return self::$tasks;
}
}