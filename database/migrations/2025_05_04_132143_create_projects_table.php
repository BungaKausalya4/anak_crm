<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->string('project_name');
            $table->text('description')->nullable();
            $table->string('status')->default('Menunggu Persetujuan');
            $table->timestamps();

            // Foreign key ke leads
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
