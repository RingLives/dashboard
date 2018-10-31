<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('company_id');
            $table->integer('user_id');
            $table->integer('group_id');
            $table->string('company_name')->unique();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('companys');
    }
}
