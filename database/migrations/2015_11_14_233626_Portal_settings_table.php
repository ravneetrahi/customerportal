<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PortalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Portal_settings', function (Blueprint $t) {
            $t->increments('id');
            $t->string('sugar_url');
            $t->string('sugar_user');
            $t->string('sugar_pass');
            $t->boolean('allow_case_reopen');
            $t->boolean('allow_case_closing');
            $t->boolean('allow_priority');
            $t->boolean('allow_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Portal_settings');
    }
}
