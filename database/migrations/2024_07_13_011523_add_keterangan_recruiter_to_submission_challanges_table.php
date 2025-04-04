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
        Schema::table('submission_challanges', function (Blueprint $table) {
            $table->text('keterangan_recruiter')->nullable()->after('keterangan_tambahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submission_challanges', function (Blueprint $table) {
            $table->dropColumn('keterangan_recruiter');
        });
    }
};
