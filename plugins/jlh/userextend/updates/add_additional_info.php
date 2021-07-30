<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddAdditionalInfo extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->text('additional_info')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('additional_info');
        });
    }

}