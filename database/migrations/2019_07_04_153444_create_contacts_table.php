<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->string('city')->nullable();
            $table->string('expirience')->nullable();
            $table->string('salary')->nullable();
            $table->integer('english_id')->nullable();
            $table->string('cv_path')->nullable();
            $table->text('companies')->nullable();
            $table->text('advantages')->nullable();
            $table->text('expectations')->nullable();
            $table->integer('stage')->default(1);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
