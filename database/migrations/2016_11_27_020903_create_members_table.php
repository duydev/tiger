<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->unique();
            $table->string('name');
            $table->date('birthday');
            $table->string('hometown');
            $table->string('phone');
            $table->string('email');
            $table->string('falcuty');
            $table->string('class');
            $table->string('school_year');
            $table->string('avatar');
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
        Schema::dropIfExists( 'members' );
    }
}
