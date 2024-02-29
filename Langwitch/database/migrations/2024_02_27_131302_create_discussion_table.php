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
            $table->integer('user_id')->autoIncrement();
            $table->text('text');
            $table->timestamps();
        });
        $this->insertData();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion');
    }
    private function insertData()
    {
        $data = [
            ['text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptates vero magnam sequi perferendis consectetur. Rerum dolores, molestiae, laudantium possimus ex quis explicabo deserunt est eum laboriosam illo magni unde? lor'],
            ['text' => 'Now we need to make routes. In laravel routes makes a relationship with your laravel controller. In your installed laravel project there is a file called web.php. Routes are written in that file. We need to create three routes for this project in this article to add, store, and view the image.'],
            ['text' => 'Now we’ve our routes, controller and model, we need to create blade files to add and display images. For adding the image-'],
            ['text' => 'sa'],
            ['text' => 'a'],
            ['text' => 'tanker'],
            ['text' => 'tahap development'],
        ];

        DB::table('discussions')->insert($data);
    }
};
