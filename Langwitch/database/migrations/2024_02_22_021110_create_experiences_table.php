<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('sn')->default(0);
            $table->integer('sl')->default(0);
            $table->integer('rb')->default(0);
            $table->integer('km')->default(0);
            $table->integer('jm')->default(0);
            $table->integer('sb')->default(0);
            $table->integer('mg')->default(0);
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER add_new_user_row AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO experiences (user_id, sn, sl, rb, km, jm, sb, mg)
                VALUES (NEW.id, 0, 0, 0, 0, 0, 0, 0);
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');

        DB::unprepared('DROP TRIGGER add_new_user_row');
    }
};
