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
        Schema::table('events', function (Blueprint $table) {
            // Check if column already exists before adding
            if (!Schema::hasColumn('events', 'registration_fee')) {
                $table->decimal('registration_fee', 8, 2)->nullable()->after('description');
            }
            // Add any other columns as necessary, with similar checks
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            if (Schema::hasColumn('events', 'registration_fee')) {
                $table->dropColumn('registration_fee');
            }
            if (Schema::hasColumn('events', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('events', 'contact')) {
                $table->dropColumn('contact');
            }
        });
    }
};
