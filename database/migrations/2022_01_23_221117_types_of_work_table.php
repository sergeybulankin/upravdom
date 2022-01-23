<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypesOfWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_of_work', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('type_of_repair_id')->constrained('types_of_repair')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type_of_work')->unique();
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
        Schema::dropIfExists('types_of_work');
    }
}
