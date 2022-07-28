<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->text('name_vi')->nullable();
            $table->text('name_en')->nullable();
            $table->text('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('sort_desc_vi')->nullable();
            $table->text('sort_desc_en')->nullable();
            $table->text('desc_vi')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('address_vi')->nullable();
            $table->text('address_en')->nullable();
            $table->text('qty')->nullable();
            $table->text('offers_vi')->nullable();
            $table->text('offers_en')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitments');
    }
}
