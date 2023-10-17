<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('education',100)->nullable();
            $table->string('father_name',100)->nullable();
            $table->string('father_phone',20)->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('mother_phone',20)->nullable();
            $table->string('spouse_name',100)->nullable();
            $table->string('spouse_phone',20)->nullable();
            $table->string('present_address',120)->nullable();
            $table->string('permanent_address',120)->nullable();
            $table->string('city',20)->nullable();
            $table->string('state',20)->nullable();
            $table->string('zip',8)->nullable();
            $table->string('country')->default('Bangladesh')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
