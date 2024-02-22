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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('Sn')->default(0);
            $table->integer('Sl')->default(0);
            $table->integer('Rb')->default(0);
            $table->integer('Km')->default(0);
            $table->integer('Jm')->default(0);
            $table->integer('Sb')->default(0);
            $table->integer('Mg')->default(0);
        });

        DB::unprepared('
            CREATE TRIGGER add_new_user_row AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO experiences (user_id, Sn, Sl, Rb, Km, Jm, Sb, Mg)
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
