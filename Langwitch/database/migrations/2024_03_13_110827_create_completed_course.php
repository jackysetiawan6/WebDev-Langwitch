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
        Schema::create('completed_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('course_01')->default(0);
            $table->integer('course_02')->default(0);
            $table->integer('course_03')->default(0);
            $table->integer('course_04')->default(0);
            $table->integer('course_05')->default(0);
            $table->integer('course_06')->default(0);
            $table->integer('course_07')->default(0);
            $table->integer('course_08')->default(0);
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER add_new_completed_row AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO completed_courses (user_id) VALUES (NEW.id);
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_course');
    }
};
