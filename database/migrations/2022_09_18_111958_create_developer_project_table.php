<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeveloperProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_project', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Developer::class)->constrained();
            $table->foreignIdFor(\App\Models\Project::class)->constrained();
            $table->date('date_assigned');
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
        Schema::dropIfExists('developer_project');
    }
}
