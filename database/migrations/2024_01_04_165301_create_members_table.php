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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('sponsor_id');
            $table->string('username')->unique();
            $table->integer('age')->nullable();
            $table->string('email',50)->unique()->safeEmail();
            $table->string('name',30);
            $table->string('country',20);
            $table->unsignedBigInteger('city_id');
            // $table->primary('city');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
