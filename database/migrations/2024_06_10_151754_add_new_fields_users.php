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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->default('1718281803.png');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->text('bio')->nullable();
            $table->text('age')->nullable();
            $table->text('gender')->nullable();
            
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['avatar', 'phone', 'city','bio','age','gender']);
        });
    }
};