<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelMatkul extends Model
{
    use HasFactory;
    protected $table = 'matkul';    
    protected $primaryKey = 'id'; 
    public $timestamps = true; 
}
