<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('description');
            $table->text('image');
            $table->decimal('price',5 ,2);
            $table->string('series',255);
            $table->date('release');
            $table->string('type',25);
            /* $table->json_encode('artists',255);
            $table->json_encode('writers',255);  */           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
