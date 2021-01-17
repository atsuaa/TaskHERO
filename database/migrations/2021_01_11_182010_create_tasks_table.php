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
            $table->timestamps();
            $table->char('title', 200);
            $table->text('description');
            $table->dateTime('due_date');
            $table->boolean('done');
            $table->integer('parent_id');
            $table->integer('child_task');
            $table->integer('before_task');
            $table->integer('task_category_id');
            $table->integer('task_group_id');
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
