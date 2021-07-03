<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZzzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zzzs', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('phone',11);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('address');
            $table->softDeletes();
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
        Schema::dropIfExists('zzzs');
    }
}
