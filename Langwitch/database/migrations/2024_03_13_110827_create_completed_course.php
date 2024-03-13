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
        Schema::create('completed_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('course_01')->default(false);
            $table->boolean('course_02')->default(false);
            $table->boolean('course_03')->default(false);
            $table->boolean('course_04')->default(false);
            $table->boolean('course_05')->default(false);
            $table->boolean('course_06')->default(false);
            $table->boolean('course_07')->default(false);
            $table->boolean('course_08')->default(false);
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER add_new_completed_row AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO completed_course (user_id) VALUES (NEW.id);
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
