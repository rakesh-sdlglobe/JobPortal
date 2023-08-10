<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySettingsTable extends Migration
{
    public function up()
{
    Schema::table('settings', function (Blueprint $table) {
        $table->boolean('employer_auto_activation')->nullable()->change();
    });
}

public function down()
{
    Schema::table('settings', function (Blueprint $table) {
        $table->boolean('employer_auto_activation')->change();
    });
}
}
