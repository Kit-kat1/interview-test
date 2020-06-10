<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnalyticsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("analytics_type", function (Blueprint $table) {
            $table->increments("id");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->nullable(true)->default(NULL);
            $table->uuid("name")->nullable(false);
            $table->string("units", 50)->nullable(false);
            $table->boolean("is_numeric")->nullable(false);
            $table->integer("num_decimal_places")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("analytics_type");
    }
}
