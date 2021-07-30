<?php namespace Jlh\PageNavIcons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJlhPagenavicons extends Migration
{
    public function up()
    {
        Schema::create('jlh_pagenavicons_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('ico')->nullable();
            $table->string('pagelink')->nullable();
            $table->string('link')->nullable();
            $table->integer('link_type')->nullable();
            $table->boolean('target')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jlh_pagenavicons_');
    }
}
