<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<<< HEAD:database/migrations/2024_01_21_113400_create_organizers_table.php
        Schema::create('organizers', function (Blueprint $table) {
========
        Schema::create('authors', function (Blueprint $table) {
>>>>>>>> origin/raouia:database/migrations/2024_01_20_234235_create_authors_table.php
            $table->id();
            $table->src();
            $table->alt();
            $table->org_order();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_01_21_113400_create_organizers_table.php
        Schema::dropIfExists('organizers');
========
        Schema::dropIfExists('authors');
>>>>>>>> origin/raouia:database/migrations/2024_01_20_234235_create_authors_table.php
    }
};
