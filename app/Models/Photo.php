<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $fillable = ['vpath', 'alt', 'title', 'pho_order'];
    public $timestamps = true;
    public static function countPhoto()
    {
        return self::count();
    }
}
