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
        Schema::create('role_privileges', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->text('privileges')->nullable();
            
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_privileges');
    }
};
