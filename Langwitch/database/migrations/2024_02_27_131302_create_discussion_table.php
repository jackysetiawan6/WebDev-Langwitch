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
        Schema::create('discussions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('text');
            $table->timestamps();
        });

        // DB::table('discussions')->insert(
        //     [
        //         'user_id' => 1,
        //         'text' => 'Hello World!',
        //         'created_at' => '2023-12-13 00:49:34',
        //         'updated_at' => '2023-12-13 00:49:34'
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion');
    }
};
