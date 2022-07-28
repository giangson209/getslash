<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStyles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_vi')->nullable();
            $table->text('name_en')->nullable();

            $table->text('slug')->nullable();

            $table->text('desc_vi')->nullable();
            $table->text('desc_en')->nullable();

            $table->text('content_vi')->nullable();
            $table->text('content_en')->nullable();


            $table->tinyInteger('status')->default(1)->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();

            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->text('name_vi')->nullable();
            $table->text('name_en')->nullable();
            $table->text('slug')->nullable();

            $table->tinyInteger('status')->default(1)->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->timestamps();
        });

        Schema::create('project_details', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('projects_id')->unsigned();
            $table->text('name_vi')->nullable();
            $table->text('name_en')->nullable();
            $table->text('sub_name_vi')->nullable();
            $table->text('sub_name_en')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();

            $table->foreign('projects_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('gallery_libs', function (Blueprint $table){
            $table->bigInteger('id');
            $table->string('model')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->text('path')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('styles');
        Schema::dropIfExists('project_details');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('gallery_libs');

    }
}
