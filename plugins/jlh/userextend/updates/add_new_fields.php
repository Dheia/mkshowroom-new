<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('store_name')->nullabel();
            $table->string('completed_first_name')->nullabel();
            $table->string('completed_last_name')->nullabel();
            $table->string('phone')->nullabel();
            $table->string('address1')->nullabel();
            $table->string('address2')->nullabel();
            $table->string('city')->nullabel();
            $table->string('state_id')->nullabel();
            $table->string('zip')->nullabel();
            $table->string('country_id')->nullabel();
            $table->string('website')->nullabel();
            $table->string('jbtid')->nullabel();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn([
                'store_name',
                'completed_first_name',
                'completed_last_name',
                'phone',
                'address1',
                'address2',
                'city',
                'state_id',
                'zip',
                'country_id',
                'website',
                'jbtid'
            ]);
        });
    }
}

