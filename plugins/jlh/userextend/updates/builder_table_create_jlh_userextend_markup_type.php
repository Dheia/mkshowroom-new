<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJlhUserextendMarkupType extends Migration
{
    public function up()
    {
        Schema::create('jlh_userextend_markup_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jlh_userextend_markup_type');
    }
}
