<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelayReasonDelayReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_reason_delay_report', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\DelayReport::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\DelayReason::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delay_reason_delay_report');
    }
}
