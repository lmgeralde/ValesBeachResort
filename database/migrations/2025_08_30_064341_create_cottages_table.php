<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cottages', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('cottage_number')->unique();
            $table->integer('capacity');
            $table->decimal('price', 10, 2);
            $table->enum('status', ['Available', 'Occupied', 'Reserved', 'Maintenance'])->default('Available');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cottages');
    }
};