<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $table->unsignedTinyInteger('live')->default(3);
            $table->integer('streak')->default(0);
            $table->string('badge')->default('Rookie');
            $table->string('avatar')->default('/images/profpic.svg');
            $table->integer('is_new')->default(1);
            $table->timestamps();
        });

        // DB::table('users')->insert([
        //     'fullname' => 'Tester Account',
        //     'email' => 'tester@se.id',
        //     'password' => Hash::make(md5('password')),
        //     'exp' => 99999,
        //     'live' => 3,
        //     'streak' => 365,
        //     'badge' => 'Admin',
        //     'avatar' => '/images/Logo.svg',
        //     'created_at' => '2023-11-25 10:30:59',
        //     'updated_at' => '2023-11-25 10:30:59'
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
