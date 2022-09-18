<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelayReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Developer::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Project::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('date_assigned');
            $table->integer('project_hours');
            $table->integer('additional_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delay_reports');
    }
}
