<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdatedNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('store_name',191)->nullable()->default(null)->change();
            $table->string('completed_first_name',191)->nullable()->default(null)->change();
            $table->string('completed_last_name',191)->nullable()->default(null)->change();
            $table->string('phone',191)->nullable()->default(null)->change();
            $table->string('address1',191)->nullable()->default(null)->change();
            $table->string('address2',191)->nullable()->default(null)->change();
            $table->string('city',191)->nullable()->default(null)->change();
            $table->string('state_id',191)->nullable()->default(null)->change();
            $table->string('zip',191)->nullable()->default(null)->change();
            $table->string('country_id',191)->nullable()->default(null)->change();
            $table->string('website',191)->nullable()->default(null)->change();
            $table->string('jbtid',191)->nullable()->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->string('store_name',191)->nullable(false)->default('null')->change();
            $table->string('completed_first_name',191)->nullable(false)->default('null')->change();
            $table->string('completed_last_name',191)->nullable(false)->default('null')->change();
            $table->string('phone',191)->nullable(false)->default('null')->change();
            $table->string('address1',191)->nullable(false)->default('null')->change();
            $table->string('address2',191)->nullable(false)->default('null')->change();
            $table->string('city',191)->nullable(false)->default('null')->change();
            $table->string('state_id',191)->nullable(false)->default('null')->change();
            $table->string('zip',191)->nullable(false)->default('null')->change();
            $table->string('country_id',191)->nullable(false)->default('null')->change();
            $table->string('website',191)->nullable(false)->default('null')->change();
            $table->string('jbtid',191)->nullable(false)->default('null')->change();
        });
    }

}
