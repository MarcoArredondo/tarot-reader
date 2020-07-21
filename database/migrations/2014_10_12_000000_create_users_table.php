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
            $table->id('user_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('telefono', 15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('type_id')->references('type_id')->on('user_types')->onDelete('cascade');
            $table->string('profile_image_path')->default('images/default_profile.png');
            $table->rememberToken();
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
