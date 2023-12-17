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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->integer('balance');
            $table->enum('currency', ['LBP', 'USD', 'EUR']);
            $table->timestamps();
            $table->enum('status', ['accepted', 'rejected', 'pending'])->default('pending');
            $table->boolean('is_enabled')->default(true);            
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
