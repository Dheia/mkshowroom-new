<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdatedNameFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('owner_first_name', 191)->nullable();
            $table->string('owner_last_name', 191)->nullable();
            $table->dropColumn('completed_first_name');
            $table->dropColumn('completed_last_name');
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('owner_first_name');
            $table->dropColumn('owner_last_name');
            $table->string('completed_first_name', 191)->nullable();
            $table->string('completed_last_name', 191)->nullable();
        });
    }

}