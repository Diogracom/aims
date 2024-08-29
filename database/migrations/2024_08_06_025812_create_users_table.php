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
            $table->foreignId('department_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('username');
            $table->string('email', 191)->unique();
            $table->enum('role',['Admin','User'])->default('user');
            $table->enum('status',['Active','Disabled'])->default('Active');
            $table->timestamp('last_login')->nullable();
            $table->integer('failed_attempts')->default(0);
            $table->rememberToken();
            $table->string('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email',191)->primary();
        //     $table->string('token',255);
        //     $table->timestamp('created_at')->nullable();
        // });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 191)->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        //Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

