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
            $table->text('reply_message')->nullable(false)->comment('回文內容');
            $table->tinyInteger('main_id')->nullable(false)->comment('原文是第幾樓');
            $table->tinyInteger('reply_id')->nullable(false)->comment('第幾則回覆');
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
