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
        Schema::create('main_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('main_message')->nullable(false)->comment('發文內容');
            $table->tinyInteger('message_id')->nullable(false)->comment('第幾樓');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_messages');
    }
};
