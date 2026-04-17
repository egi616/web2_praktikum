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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('id');
            $table->dropColumn('name');

            $table->unsignedBigInteger('npm')->primary()->first();
            $table->string('username')->after('npm');
            $table->string('first_name')->after('username');
            $table->string('last_name')->after('first_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //hapus kolom yang dibuat
            $table->dropColumn(['npm', 'username', 'first_name', 'last_name']);

            //awal
            $table->id()->first();
            $table->string('name')->after('id');
        });
    }
};
