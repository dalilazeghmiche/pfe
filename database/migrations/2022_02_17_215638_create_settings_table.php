<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string('youtube')->nullable();
            $table->float('subscription_price');
            $table->text('description')->nullable();
            $table->string('tags')->nullable();
            $table->mediumText('logo')->nullable();
            $table->mediumText('favicon')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
