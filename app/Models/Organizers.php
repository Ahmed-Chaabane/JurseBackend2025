<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizers extends Model
{
    use HasFactory;
    #protected $table = 'organizers';
    protected $fillable = ['src', 'alt', 'org_order'];
}
