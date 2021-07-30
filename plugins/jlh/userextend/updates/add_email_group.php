<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddEmailGroup extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->boolean('email_group')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('email_group');
        });
    }

}