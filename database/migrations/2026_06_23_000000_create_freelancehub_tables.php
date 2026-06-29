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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('company_initial');
            $table->string('category');
            $table->decimal('rate', 8, 2);
            $table->integer('hours');
            $table->json('skills');
            $table->text('description');
            $table->string('status');
            $table->string('type');
            $table->date('posted_at');
            $table->integer('applicants');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('job_postings')->cascadeOnDelete();
            $table->string('job_title');
            $table->string('company');
            $table->date('applied_at');
            $table->decimal('rate', 8, 2);
            $table->integer('hours');
            $table->string('status');
            $table->string('applicant_name');
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('client');
            $table->integer('hours');
            $table->decimal('rate', 8, 2);
            $table->string('status');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('initial');
            $table->text('last');
            $table->string('time');
            $table->unsignedInteger('unread');
            $table->boolean('online')->default(false);
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')->constrained('contacts')->cascadeOnDelete();
            $table->string('from');
            $table->text('text');
            $table->string('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('applications');
        Schema::dropIfExists('job_postings');
    }
};
