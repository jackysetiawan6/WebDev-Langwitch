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
            $table->string('opt_a');
            $table->string('opt_b');
            $table->string('opt_c');
            $table->string('opt_d');
            $table->string('opt_e');
            $table->char('correct_opt', 7);
            $table->timestamps();
        });

        DB::table('questions')->insert([
            ['exercise_id' => 1, 'soal' => 'What is the usage of simple present tense?', 'opt_a' => 'We use it to talk about facts, truths and generalization', 'opt_b' => 'We use it to talk about facts that happened in the past', 'opt_c' => 'We use it to talk about something still happening', 'opt_d' => 'We use it to talk about activities we do right now', 'opt_e' => 'We use it to talk about something that will happen in the future', 'correct_opt' => 'opt_a'],
            ['exercise_id' => 2, 'soal' => 'Jason ___ (Play) the guitar', 'opt_a' => 'Played', 'opt_b' => 'Playing', 'opt_c' => 'Plays', 'opt_d' => 'Play', 'opt_e' => 'Was playing', 'correct_opt' => 'opt_c'],
            ['exercise_id' => 3, 'soal' => 'The teacher ___ (Meet) the parents today.', 'opt_a' => 'Meets', 'opt_b' => 'Met', 'opt_c' => 'Was meeting', 'opt_d' => 'Meeting', 'opt_e' => 'Were meet', 'correct_opt' => 'opt_a'],
            ['exercise_id' => 4, 'soal' => 'Chan  ___ (go) to piano lessons every Monday.', 'opt_a' => 'Going', 'opt_b' => 'Was going', 'opt_c' => 'Gone', 'opt_d' => 'Goes', 'opt_e' => 'Went', 'correct_opt' => 'opt_d'],
            ['exercise_id' => 5, 'soal' => 'The movie ___ (start) within a few minutes.', 'opt_a' => 'Started', 'opt_b' => 'Was starting', 'opt_c' => 'Starting', 'opt_d' => 'Starts', 'opt_e' => 'Is starting', 'correct_opt' => 'opt_d'],
            ['exercise_id' => 6, 'soal' => 'Athalia ___ (cook) delicious fried rice.', 'opt_a' => 'Cooks', 'opt_b' => 'Cooking', 'opt_c' => 'Cooked', 'opt_d' => 'Have cooked', 'opt_e' => 'Was cooking', 'correct_opt' => 'opt_a'],
            ['exercise_id' => 7, 'soal' => '(you/like) swimming?', 'opt_a' => 'Does you like', 'opt_b' => 'Do you like', 'opt_c' => 'Was you liked', 'opt_d' => 'Does you likes', 'opt_e' => 'Do you likes', 'correct_opt' => 'opt_b'],
            ['exercise_id' => 8, 'soal' => 'We ___ a nice garden', 'opt_a' => 'Have', 'opt_b' => 'Has', 'opt_c' => 'Had', 'opt_d' => 'Having', 'opt_e' => 'Haved', 'correct_opt' => 'opt_a'],
            ['exercise_id' => 9, 'soal' => 'Ichsan ___ two kitten and 10 fish', 'opt_a' => 'Having', 'opt_b' => 'Were having', 'opt_c' => 'Has', 'opt_d' => 'Had', 'opt_e' => 'Have', 'correct_opt' => 'opt_d'],
            ['exercise_id' => 10, 'soal' => 'They ___ Jacky parents.', 'opt_a' => 'Were', 'opt_b' => 'Are', 'opt_c' => 'Was', 'opt_d' => 'Is', 'opt_e' => 'Having', 'correct_opt' => 'opt_b'],
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


};
