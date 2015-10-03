<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_items', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('category', ['news', 'event', 'tools', 'gifts'])->default('tools');
            $table->string('url');
            $table->string('title');
            $table->text('body');
            $table->integer('newsletter_id')->references('id')->on('newsletter');
            $table->softDeletes();
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
        Schema::drop('newsletter_items');
    }
}
