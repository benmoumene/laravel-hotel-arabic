<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {// شروط التعاقد
        Schema::create('contract_terms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم شرط التعاقد
            $table->string('body'); // النص
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
        Schema::dropIfExists('contract_terms');
    }
}
