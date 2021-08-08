<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('twitch_id');
            $table->string('twitch_username');
            $table->string('image');
            $table->string('email')->unique();

            $table->string('role')->nullable();
            $table->boolean('terms')->default(false);
            $table->boolean('sent_message')->default(false);
            $table->bigInteger('views');

            $table->timestamp('signed_at')->nullable();
            $table->timestamp('twitch_created_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
