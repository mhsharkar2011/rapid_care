<?php

use App\Enums\Status;
use App\Enums\Type;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_no');
            $table->foreignId('created_by')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title')->nullable();
            $table->enum('type',[Type::NORMAL,Type::VIP])->default('NORMAL');
            $table->enum('status',[Status::ACTIVE,Status::INACTIVE])->default('ACTIVE');
            $table->date('expire_date')->default(Carbon::now()->addYears(5));
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
        Schema::dropIfExists('cards');
    }
}
