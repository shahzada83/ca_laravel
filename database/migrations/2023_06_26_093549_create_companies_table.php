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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_type_id')->nullable();
            $table->string('type');
            $table->foreign('company_type_id')->references('id')->on('company_types');
            $table->date('est_date')->nullable();
            $table->string('name');
            $table->string('city');
            $table->string('state');
            $table->string('pin');
            $table->string('address')->nullable();
            $table->string('primary_email');
            $table->string('secondary_email')->nullable();
            $table->string('primary_phone');
            $table->string('secondary_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
