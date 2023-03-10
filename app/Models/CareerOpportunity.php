<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerOpportunity extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'experience', 'education', 'vacancy', 'link'];
}
