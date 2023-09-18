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
        Schema::create('reply_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('reply_message')->nullable()->default('')->comment('回文內容');
            $table->integer('main_id')->nullable()->comment('主樓是哪一樓');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_messages');
    }
};