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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->integer('exp')->default(0);
            $table->integer('streak')->default(0);
            $table->string('badge')->default('rookie');
            $table->string('avatar')->default('default.svg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
