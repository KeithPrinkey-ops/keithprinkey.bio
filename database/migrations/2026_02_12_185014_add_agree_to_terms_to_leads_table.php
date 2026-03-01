// In terminal: php artisan make:migration add_agree_to_terms_to_leads_table --table=leads
    // Then edit the generated migration file in database/migrations/ as follows:

    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::table('leads', function (Blueprint $table) {
                $table->boolean('agree_to_terms')->default(false);
            });
        }

        public function down(): void
        {
            Schema::table('leads', function (Blueprint $table) {
                $table->dropColumn('agree_to_terms');
            });
        }
    };
