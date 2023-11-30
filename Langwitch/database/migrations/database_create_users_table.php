<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->char('id', length: 5)->primary;
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('registered_date');
            $table->dateTime('last_online_date');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
