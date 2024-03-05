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
            $table->unsignedBigInteger('exercise_level');
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
            ['exercise_level' => 1, 'soal' => 'What is the usage of simple present tense?', 'opt_a' => 'We use it to talk about facts, truths and generalization', 'opt_b' => 'We use it to talk about facts that happened in the past', 'opt_c' => 'We use it to talk about something still happening', 'opt_d' => 'We use it to talk about activities we do right now', 'opt_e' => 'We use it to talk about something that will happen in the future', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 1, 'soal' => 'Jason ___ (Play) the guitar', 'opt_a' => 'Played', 'opt_b' => 'Playing', 'opt_c' => 'Plays', 'opt_d' => 'Play', 'opt_e' => 'Was playing', 'correct_opt' => 'opt_c'],
            ['exercise_level' => 1, 'soal' => 'The teacher ___ (Meet) the parents today.', 'opt_a' => 'Meets', 'opt_b' => 'Met', 'opt_c' => 'Was meeting', 'opt_d' => 'Meeting', 'opt_e' => 'Were meet', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 1, 'soal' => 'Chan  ___ (go) to piano lessons every Monday.', 'opt_a' => 'Going', 'opt_b' => 'Was going', 'opt_c' => 'Gone', 'opt_d' => 'Goes', 'opt_e' => 'Went', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 1, 'soal' => 'The movie ___ (start) within a few minutes.', 'opt_a' => 'Started', 'opt_b' => 'Was starting', 'opt_c' => 'Starting', 'opt_d' => 'Starts', 'opt_e' => 'Is starting', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 1, 'soal' => 'Athalia ___ (cook) delicious fried rice.', 'opt_a' => 'Cooks', 'opt_b' => 'Cooking', 'opt_c' => 'Cooked', 'opt_d' => 'Have cooked', 'opt_e' => 'Was cooking', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 1, 'soal' => '(you/like) swimming?', 'opt_a' => 'Does you like', 'opt_b' => 'Do you like', 'opt_c' => 'Was you liked', 'opt_d' => 'Does you likes', 'opt_e' => 'Do you likes', 'correct_opt' => 'opt_b'],
            ['exercise_level' => 1, 'soal' => 'We ___ a nice garden', 'opt_a' => 'Have', 'opt_b' => 'Has', 'opt_c' => 'Had', 'opt_d' => 'Having', 'opt_e' => 'Haved', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 1, 'soal' => 'Ichsan ___ two kitten and 10 fish', 'opt_a' => 'Having', 'opt_b' => 'Were having', 'opt_c' => 'Has', 'opt_d' => 'Had', 'opt_e' => 'Have', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 1, 'soal' => 'They ___ Jacky parents.', 'opt_a' => 'Were', 'opt_b' => 'Are', 'opt_c' => 'Was', 'opt_d' => 'Is', 'opt_e' => 'Having', 'correct_opt' => 'opt_b'],

            ['exercise_level' => 2, 'soal' => 'What is the usage of present continuous tense?', 'opt_a' => 'We use it to talk about facts, truths and generalization', 'opt_b' => 'We use it to talk about facts that happened in the past', 'opt_c' => 'We use it to talk about something that still happened', 'opt_d' => 'We use it to talk about something that happening now', 'opt_e' => 'We use it to talk about something that happened in future', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 2, 'soal' => 'She ___ (read) a book in the park', 'opt_a' => 'Is reading', 'opt_b' => 'Was reading', 'opt_c' => 'Reads', 'opt_d' => 'Are reading', 'opt_e' => 'Read', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 2, 'soal' => 'I ___ (write) a letter to my parent', 'opt_a' => 'Wrote', 'opt_b' => 'Writes', 'opt_c' => 'Was writing', 'opt_d' => 'Am writing', 'opt_e' => 'Were writing', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 2, 'soal' => 'My Son ___ (talk) on the phone right now.', 'opt_a' => 'Is talking', 'opt_b' => 'Are talking', 'opt_c' => 'Was talking', 'opt_d' => 'Were talking', 'opt_e' => 'Talks', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 2, 'soal' => 'Gojo and I ___ (paint) the fences today', 'opt_a' => 'Is painting', 'opt_b' => 'Painted', 'opt_c' => 'Was painting', 'opt_d' => 'Are painting', 'opt_e' => 'Paints', 'correct_opt' => 'opt_d'],
            ['exercise_level' => 2, 'soal' => 'I ___ (read) my book at the moment', 'opt_a' => 'Was reading', 'opt_b' => 'Am reading', 'opt_c' => 'Were reading', 'opt_d' => 'Am read', 'opt_e' => 'Reads', 'correct_opt' => 'opt_b'],
            ['exercise_level' => 2, 'soal' => 'The boys ___ (annoy) everyone present at the party.', 'opt_a' => 'Annoys', 'opt_b' => 'Was annoying', 'opt_c' => 'Are annoying', 'opt_d' => 'Is annoying', 'opt_e' => 'Annoyed', 'correct_opt' => 'opt_c'],
            ['exercise_level' => 2, 'soal' => 'The cat ___ (sit) on the couch.', 'opt_a' => 'Is sitting', 'opt_b' => 'Are sitting', 'opt_c' => 'Was sitting', 'opt_d' => 'Were sitting', 'opt_e' => 'Sits', 'correct_opt' => 'opt_a'],
            ['exercise_level' => 2, 'soal' => 'The sun ___ (rise) in the east.', 'opt_a' => 'Risen', 'opt_b' => 'Rising', 'opt_c' => 'Is rising', 'opt_d' => 'Are rising', 'opt_e' => 'Was rising', 'correct_opt' => 'opt_c'],
            ['exercise_level' => 2, 'soal' => 'I ___ (Study) for my math exam.', 'opt_a' => 'Was studying', 'opt_b' => 'Were studying', 'opt_c' => 'Am studying', 'opt_d' => 'Am studied', 'opt_e' => 'Am studies', 'correct_opt' => 'opt_c'],

            // ['exercise_level' => 3, 'soal' => 'What is the usage of present perfect tense?', 'opt_a' => 'We use it to talk about facts, truths and generalization', 'opt_b' => 'We use it to talk about facts that happened in the past that still continue today', 'opt_c' => 'We use it to talk about something that still happened', 'opt_d' => 'We use it to talk about something that happening now', 'opt_e' => 'We use it to talk about something that happened in the future', 'correct_opt' => 'opt_b'],
            // ['exercise_level' => 3, 'soal' => 'I ___ (pay) your mobile data', 'opt_a' => 'Have paid', 'opt_b' => 'Has paid', 'opt_c' => 'Was paying', 'opt_d' => 'Were paying', 'opt_e' => 'Pays', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 3, 'soal' => 'She ___ (live) here since 2000', 'opt_a' => 'Was living', 'opt_b' => 'Lives', 'opt_c' => 'Were living', 'opt_d' => 'Had lived', 'opt_e' => 'Had lived', 'correct_opt' => 'opt_e'],
            // ['exercise_level' => 3, 'soal' => 'I ___ (not see) my cousins since Christmas', 'opt_a' => 'Hadn’t see', 'opt_b' => 'Haven’t seen', 'opt_c' => 'Hadn’t saw', 'opt_d' => 'Haven’t saw', 'opt_e' => 'Haven’t seeing', 'correct_opt' => 'opt_b'],
            // ['exercise_level' => 3, 'soal' => 'He ___ (work) under the pressure of his boss', 'opt_a' => 'Have worked', 'opt_b' => 'Was working', 'opt_c' => 'Has worked', 'opt_d' => 'Have working', 'opt_e' => 'Works', 'correct_opt' => 'opt_c'],
            // ['exercise_level' => 3, 'soal' => 'We ___ (make) some cakes.', 'opt_a' => 'Have made', 'opt_b' => 'Has made', 'opt_c' => 'Was making', 'opt_d' => 'Makes', 'opt_e' => 'Were making', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 3, 'soal' => 'I ___ (read) all the terms and conditions of your company', 'opt_a' => 'Was reading', 'opt_b' => 'Have read', 'opt_c' => 'Reads', 'opt_d' => 'Has read', 'opt_e' => 'Were reading', 'correct_opt' => 'opt_b'],
            // ['exercise_level' => 3, 'soal' => 'The grass ___ (grow) very long these days', 'opt_a' => 'Have grown', 'opt_b' => 'Was growing', 'opt_c' => 'Were growing', 'opt_d' => 'Has grow', 'opt_e' => 'Has grown', 'correct_opt' => 'opt_e'],
            // ['exercise_level' => 3, 'soal' => 'Jacky ___ (beat) his friend in the 10km race', 'opt_a' => 'Have beats', 'opt_b' => 'Was beating', 'opt_c' => 'Has beaten', 'opt_d' => 'Has beating', 'opt_e' => 'Have beaten', 'correct_opt' => 'opt_c'],
            // ['exercise_level' => 3, 'soal' => 'I ___ (lay) the table', 'opt_a' => 'Have laid', 'opt_b' => 'Has laid', 'opt_c' => 'Have layed', 'opt_d' => 'Has layed', 'opt_e' => 'Was laying', 'correct_opt' => 'opt_a'],

            // ['exercise_level' => 4, 'soal' => 'What is the usage of present perfect tense?', 'opt_a' => 'We use It to talk about facts, truths and generalization', 'opt_b' => 'We use it to talk about facts that happened in the past that still continue today', 'opt_c' => 'We use it to talk about something that still happened', 'opt_d' => 'We use it to talk about something that happening now', 'opt_e' => 'We use it to talk about something that already completed in the past or start in the past but still going until now', 'correct_opt' => 'opt_e'],
            // ['exercise_level' => 4, 'soal' => 'Mother ___ (cook)', 'opt_a' => 'Has been cooking', 'opt_b' => 'Was cooking', 'opt_c' => 'Cooks', 'opt_d' => 'Have been cooking', 'opt_e' => 'Have cooked', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 4, 'soal' => 'Ghoran ___ (learn) English in Beelingua for three months.', 'opt_a' => 'Have been learning', 'opt_b' => 'Was learning', 'opt_c' => 'Learned', 'opt_d' => 'Has been learning', 'opt_e' => 'Have learned', 'correct_opt' => 'opt_d'],
            // ['exercise_level' => 4, 'soal' => 'The doctors ___ (operate) for six hours', 'opt_a' => 'Has been operating', 'opt_b' => 'Was operating', 'opt_c' => 'Operated', 'opt_d' => 'Were operating', 'opt_e' => 'Have been operating', 'correct_opt' => 'opt_e'],
            // ['exercise_level' => 4, 'soal' => 'The Dog ___ (bark) since last night', 'opt_a' => 'Was barking', 'opt_b' => 'Has been barking', 'opt_c' => 'Had been barking', 'opt_d' => 'Have been barking', 'opt_e' => 'Barks', 'correct_opt' => 'opt_b'],
            // ['exercise_level' => 4, 'soal' => 'I ___ (read) Demon Slayer since Monday', 'opt_a' => 'Have been reading', 'opt_b' => 'Was reading', 'opt_c' => 'Has been reading', 'opt_d' => 'Reads', 'opt_e' => 'Have read', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 4, 'soal' => 'Ichsan ___ (play) Mobile Legend since last night', 'opt_a' => 'Was playing', 'opt_b' => 'Have been playing', 'opt_c' => 'Were playing', 'opt_d' => 'Has been playing', 'opt_e' => 'Have played', 'correct_opt' => 'opt_d'],
            // ['exercise_level' => 4, 'soal' => 'It ___ (rain) since evening', 'opt_a' => 'Has not been raining', 'opt_b' => 'Have not been raining', 'opt_c' => 'Was raining', 'opt_d' => 'Were raining', 'opt_e' => 'Was rained', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 4, 'soal' => 'They ___ (live) here since 10 years ago', 'opt_a' => 'Have been living', 'opt_b' => 'Has been living', 'opt_c' => 'Was living', 'opt_d' => 'Were living', 'opt_e' => 'Lived', 'correct_opt' => 'opt_a'],
            // ['exercise_level' => 4, 'soal' => 'It ___ (rain) since dawn', 'opt_a' => 'Have been raining', 'opt_b' => 'Was raining', 'opt_c' => 'Has been raining', 'opt_d' => 'Have rained', 'opt_e' => 'Were raining', 'correct_opt' => 'opt_c'],
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
