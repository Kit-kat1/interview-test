<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("properties", function (Blueprint $table) {
            $table->increments("id");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->nullable(true)->default(NULL);
            $table->uuid("guid")->nullable(false);
            $table->string("suburb", 255)->nullable(true);
            $table->string("state", 50)->nullable(false);
            $table->string("country", 50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("properties");
    }
}
