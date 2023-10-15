<?php

use App\Enums\Category;
use App\Enums\Status;
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
            $table->string('card_no')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->enum('category',[Category::BRONZE,Category::SILVER, Category::GOLD])->default('Bronze');
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
