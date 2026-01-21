<?php

            use Illuminate\Database\Migrations\Migration;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Support\Facades\Schema;

            return new class extends Migration {
                public function up(): void
                {
                    Schema::create('services', function (Blueprint $table) {
                        $table->id();
                        $table->string('name');
                        $table->string('slug')->unique();
                        $table->text('description');
                        $table->string('icon');
                        $table->string('category');
                        $table->json('features')->nullable();
                        $table->string('price_range')->nullable();
                        $table->json('service_focus')->nullable();
                        $table->string('project_type')->nullable();
                        $table->text('current_stack')->nullable();
                        $table->string('company_size')->nullable();
                        $table->string('industry')->nullable();
                        $table->text('primary_goals')->nullable();
                        $table->text('scope_details')->nullable();
                        $table->text('integrations')->nullable();
                        $table->text('compliance_requirements')->nullable();
                        $table->text('pain_points')->nullable();
                        $table->string('billing_model')->nullable();
                        $table->string('decision_timeline')->nullable();
                        $table->string('launch_deadline')->nullable();
                        $table->text('internal_team')->nullable();
                        $table->string('primary_contact_role')->nullable();
                        $table->text('success_metrics')->nullable();
                        $table->text('existing_assets')->nullable();
                        $table->text('constraints')->nullable();
                        $table->boolean('active');
                        $table->timestamps();
                        $table->softDeletes();
                    });
                }

                public function down(): void
                {
                    Schema::dropIfExists('services');
                }
            };
