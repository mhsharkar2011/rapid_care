<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('specialization')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('education',100)->nullable();
            $table->string('designation',100)->nullable();
            $table->string('address',120)->nullable();
            $table->string('city',20)->nullable();
            $table->string('state',20)->nullable();
            $table->string('zip',8)->nullable();
            $table->string('country')->default('Bangladesh')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
