<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairwiseComparisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pairwise_comparisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('first_criteria_id')->references('id')->on('criterias');
            $table->foreignId('value_weight_id');
            $table->foreignId('second_criteria_id')->references('id')->on('criterias');
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
        Schema::dropIfExists('pairwise_comparisons');
    }
}
