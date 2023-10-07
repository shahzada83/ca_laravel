<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->string('PAN');
            $table->string('aadhar');
            $table->string('aadhar_linked_phone');
            $table->string('aadhar_linked_email')->nullable();
            $table->string('gstin')->nullable();
            $table->string('tan')->nullable();
            $table->string('cin')->nullable();
            $table->string('tin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
