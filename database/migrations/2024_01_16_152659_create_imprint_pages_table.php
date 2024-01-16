<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imprint_pages', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('legal_address');
            $table->string('telephone_number');
            $table->string('fax_number');
            $table->string('company_email');
            $table->string('reg_court');
            $table->string('reg_number');
            $table->string('vat_id');
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
        Schema::dropIfExists('imprint_pages');
    }
};
