<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('position')->default('');
            $table->string('title')->default('');
            $table->integer('type')->default(1);
            $table->string('address_1');
            $table->string('address_2')->default('');
            $table->string('city')->default('');
            $table->integer('state_id')->unsigned();
            $table->integer('zip')->nullable();
            $table->text('description')->nullable('');
            $table->text('roles')->nullable('');
            $table->text('skills')->nullable('');
            $table->date('expires_at');
            $table->date('start_at');
            $table->integer('status_id')->default(0)->unsigned();
            $table->foreign('status_id')->references('id')->on('job_status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('jobs');
    }
}
