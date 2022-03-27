<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certif extends Model
{ use HasFactory;
  protected $fillable = ['nommedecin','nompatient','nbjour','date','daterepos','sig'];}
