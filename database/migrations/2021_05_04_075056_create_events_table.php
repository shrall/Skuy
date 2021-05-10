<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('custom_link');
            $table->string('slug')->nullable();
            $table->text('description');
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->integer('template');
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('date');
            $table->string('title_color');
            $table->string('desc_color');
            $table->string('date_color');
            $table->string('contacts_color');
            $table->enum('register', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('register_text')->nullable();
            $table->string('register_button_color')->nullable();
            $table->string('register_text_color')->nullable();
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
        Schema::dropIfExists('events');
    }
}
