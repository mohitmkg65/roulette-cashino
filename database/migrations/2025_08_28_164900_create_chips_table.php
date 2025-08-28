<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chips', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('color');

            $table->enum('status',['active','delete','inactive'])->default('active');
            $table->string('created_by')->nullable();
            $table->foreignId('created_by_id')->nullable();
            $table->string('created_by_ip_address')->nullable();
            $table->string('modified_by')->nullable();
            $table->foreignId('modified_by_id')->nullable();
            $table->string('modified_by_ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chips');
    }
};
