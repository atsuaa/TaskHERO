<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_category_id')->nullable();
            $table->integer('task_group_id')->nullable();
            $table->integer('user_id');
            $table->integer('user_group_id')->nullable();
            $table->char('title', 200);
            $table->text('description')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->boolean('is_done')->default(false);
            $table->integer('parent_id')->nullable();
            $table->integer('child_task')->nullable();
            $table->integer('before_task')->nullable();
            $table->tinyInteger('level')->default(1);
            $table->boolean('need_help')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
