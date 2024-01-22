<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeynoteSpeaker extends Model
{
    use HasFactory;
    protected  $fillable = [
        'firstname',
        'lastname',
        'description',
        'website',
    ];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keynote_speakers');
    }
}
