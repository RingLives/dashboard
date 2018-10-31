<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->integer('user_id');
            $table->string('route_name')->unique()->nullable();
            $table->string('id_parent_menu')->nullable();
            $table->string('id_child_menu');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('order_by');
            $table->tinyInteger('is_active');
            $table->string('last_action');
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
        Schema::dropIfExists('menus');
    }
}
