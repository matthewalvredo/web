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
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('supliers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('notelp');
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::create('bakus', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('stock');
            $table->integer('price');
            $table->string('code');
            $table->integer('suplier_id');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('jadis', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('stock');
            $table->integer('price');
            $table->string('code');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('transaksis', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('baku_id');
            $table->string('suplier_id');
            $table->string('jadi_id');
            $table->string('type');
            $table->integer('stock');
            $table->bigInteger('totalprice');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('supliers');
        Schema::dropIfExists('bakus');
        Schema::dropIfExists('jadis');
        Schema::dropIfExists('transaksis');
    }
};
