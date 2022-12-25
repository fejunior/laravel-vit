<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            $table->string('birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('guid')->unique()->nullable();
            $table->string('domain')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('password');
            $table->text('memberof')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('whenchanged')->nullable();
            $table->timestamp('whencreated')->nullable();
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
};
