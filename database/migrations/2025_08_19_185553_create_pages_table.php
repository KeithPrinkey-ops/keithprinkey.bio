<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subtitle');
            $table->text('summary');
            $table->text('meta_description');
            $table->string('og_image_path');
            $table->string('route_name');
            $table->string('external_url');
            $table->json('tech_stack');
            $table->json('features');
            $table->json('screenshots');
            $table->json('faqs');
            $table->integer('order_column');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
