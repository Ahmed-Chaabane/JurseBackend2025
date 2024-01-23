<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $fillable = ['vpath', 'title', 'vid_order'];
    public $timestamps = true;
    public static function countVideo()
    {
        return self::count();
    }
}
