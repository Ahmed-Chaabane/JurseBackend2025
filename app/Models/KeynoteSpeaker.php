<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeynoteSpeaker extends Model
{
    use HasFactory;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keynote_speakers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('description');
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

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
