<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordonnce extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','medicament','heure','nombre','rendez','conseil'];
}