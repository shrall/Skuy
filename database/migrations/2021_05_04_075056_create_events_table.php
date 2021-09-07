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
            $table->string('register_link')->nullable();
            $table->string('register_button_color')->nullable();
            $table->string('register_text_color')->nullable();


            $table->enum('extra', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_heading')->nullable();
            $table->integer('extra_template')->nullable();
            $table->string('extra_text')->nullable();
            $table->string('extra_button_color')->nullable();
            $table->string('extra_text_color')->nullable();

            $table->enum('extra_1', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_image_1')->nullable();
            $table->string('extra_head_1')->nullable();
            $table->string('extra_body_1')->nullable();

            $table->enum('extra_2', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_image_2')->nullable();
            $table->string('extra_head_2')->nullable();
            $table->string('extra_body_2')->nullable();

            $table->enum('extra_3', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_image_3')->nullable();
            $table->string('extra_head_3')->nullable();
            $table->string('extra_body_3')->nullable();

            $table->enum('extra_4', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_image_4')->nullable();
            $table->string('extra_head_4')->nullable();
            $table->string('extra_body_4')->nullable();

            $table->enum('extra_5', ['0', '1'])
                ->default('0')
                ->comment('0 = Off, 1 = On');
            $table->string('extra_image_5')->nullable();
            $table->string('extra_head_5')->nullable();
            $table->string('extra_body_5')->nullable();
            $table->string('highlight_icon')->nullable();
            $table->string('highlight_color')->nullable();
            $table->string('highlight_head')->nullable();
            $table->string('highlight_body')->nullable();
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
