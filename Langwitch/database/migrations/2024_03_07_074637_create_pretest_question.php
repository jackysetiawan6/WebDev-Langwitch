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
        Schema::create('pretest', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('pretest_level');
            $table->text('soal');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('e');
            $table->char('correct', 2);
            $table->timestamps();
        });
        DB::table('pretest')->insert([
            ['pretest_level' => 1, 'soal' => '(you/like) swimming?', 'a' => 'Does you like', 'b' => 'Do you like', 'c' => 'Was you liked', 'd' => 'Does you likes', 'e' => 'Do you likes', 'correct' => 'b'],
            ['pretest_level' => 2, 'soal' => 'The boys ___ (annoy) everyone present at the party.', 'a' => 'Annoys', 'b' => 'Was annoying', 'c' => 'Are annoying', 'd' => 'Is annoying', 'e' => 'Annoyed', 'correct' => 'c'],
            ['pretest_level' => 3, 'soal' => 'He ___ (work) under the pressure of his boss', 'a' => 'Have worked', 'b' => 'Was working', 'c' => 'Has worked', 'd' => 'Have working', 'e' => 'Works', 'correct' => 'c'],
            ['pretest_level' => 4, 'soal' => 'Ichsan ___ (play) Mobile Legend since last night', 'a' => 'Was playing', 'b' => 'Have been playing', 'c' => 'Were playing', 'd' => 'Has been playing', 'e' => 'Have played', 'correct' => 'd'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pretest_question');
    }
};
