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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->boolean('is_system_user')->default(false);
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('last_login')->nullable();
            $table->string('fcm_token')->nullable();
            $table->string('otp')->nullable();

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
        Schema::dropIfExists('users');
    }
};
