<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportError extends Model
{
    use HasFactory;
    protected $fillable = ['row', 'attribute', 'values', 'errors', 'module'];  
}
