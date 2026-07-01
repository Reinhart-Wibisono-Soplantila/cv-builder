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
        Schema::table('cvs', function (Blueprint $table) {
            $table->dropColumn('address');        // hapus kolom address
            $table->unsignedBigInteger('country_id')->nullable(); // tambah country_id
            $table->unsignedBigInteger('state_id')->nullable();   // tambah state_id
            $table->unsignedBigInteger('city_id')->nullable();    // tambah city_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->dropColumn(['country_id', 'state_id', 'city_id']);
            $table->string('address')->nullable();
        });
    }
};
