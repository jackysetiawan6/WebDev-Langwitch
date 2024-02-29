<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('exercise_id');
            $table->text('soal');
            $table->timestamps();
        });
        DB::table('questions')->insert([
            ['exercise_id' => 1, 'soal' => '[random-soal-1]'],
            ['exercise_id' => 2, 'soal' => '[random-soal-2]'],
            ['exercise_id' => 3, 'soal' => '[random-soal-3]'],
            ['exercise_id' => 4, 'soal' => '[random-soal-4]'],
            ['exercise_id' => 5, 'soal' => '[random-soal-5]'],
            ['exercise_id' => 6, 'soal' => '[random-soal-6]'],
            ['exercise_id' => 7, 'soal' => '[random-soal-7]'],
            ['exercise_id' => 8, 'soal' => '[random-soal-8]'],
            ['exercise_id' => 9, 'soal' => '[random-soal-9]'],
            ['exercise_id' => 10, 'soal' => '[random-soal-10]'],
            ['exercise_id' => 11, 'soal' => '[random-soal-11]'],
            ['exercise_id' => 12, 'soal' => '[random-soal-12]'],
            ['exercise_id' => 13, 'soal' => '[random-soal-13]'],
            ['exercise_id' => 14, 'soal' => '[random-soal-14]'],
            ['exercise_id' => 15, 'soal' => '[random-soal-15]'],
            ['exercise_id' => 16, 'soal' => '[random-soal-16]'],
            ['exercise_id' => 17, 'soal' => '[random-soal-17]'],
            ['exercise_id' => 18, 'soal' => '[random-soal-18]'],
            ['exercise_id' => 19, 'soal' => '[random-soal-19]'],
            ['exercise_id' => 20, 'soal' => '[random-soal-20]'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }

    /**
     * Insert data into the questions table.
     *
     */

};
