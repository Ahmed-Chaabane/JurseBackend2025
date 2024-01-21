<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = 'tweets';

    protected $fillable = [
        'link',
        'content',
        'datetweet',
    ];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
