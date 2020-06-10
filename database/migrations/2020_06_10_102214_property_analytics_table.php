<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertyAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("property_analytics", function (Blueprint $table) {
            $table->increments("id");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->nullable(true)->default(NULL);
            $table->integer("property_id")->unsigned();
            $table->integer("analytic_type_id")->unsigned();
            $table->text("value")->nullable(false);

            $table->index('property_id');
            $table->index('analytic_type_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete("cascade");
            $table->foreign('analytic_type_id')->references('id')->on('analytics_type')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("property_analytics");
    }
}
