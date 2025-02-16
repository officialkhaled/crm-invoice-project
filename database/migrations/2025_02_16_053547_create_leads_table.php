<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('source')->comment(' Website/Referral')->nullable();
            $table->string('source_url')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1: New, 2: Contacted, 3: Qualified, 4:Lost');
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
