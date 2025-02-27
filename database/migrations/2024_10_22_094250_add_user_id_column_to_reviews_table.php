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
        Schema::table('rewiews', function (Blueprint $table) {
            $table->foreignId("user_id")->nullable()->after("movie_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rewiews', function (Blueprint $table) {
            $table->dropColumn(columns: "user_id");
        });
    }
};
