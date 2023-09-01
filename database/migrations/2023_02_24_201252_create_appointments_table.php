<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('employee_id')->nullable()->constrained('employees');
            $table->foreignId('patient_id')->nullable()->constrained('patients')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('card_no')->nullable()->constrained('cards');
            $table->date('date');
            $table->time('time');
            $table->enum('status',[Status::ACTIVE, Status::INACTIVE])->default(Status::ACTIVE);
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
        Schema::dropIfExists('appointments');
    }
}
