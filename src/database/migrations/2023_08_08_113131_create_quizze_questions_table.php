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
        Schema::create('quizze_questions', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('設問画像');
            $table->string('text')->comment('設問');
            $table->string('supplement')->nullable()->comment('設問補足');
            $table->unsignedBigInteger('quiz_id');
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizzes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizze_questions');
    }
};
