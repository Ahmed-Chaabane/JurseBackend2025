<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $table = 'tweets';
    protected $fillable = ['link', 'content_tweet' , 'datetweet'];
    public $timestamps = true;
    public static function countTweets()
    {
        return self::count();
    }
}
