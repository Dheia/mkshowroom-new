<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroom3 extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->string('keyword01')->nullable();
            $table->string('keyword02')->nullable();
            $table->string('keyword03')->nullable();
            $table->string('keyword04')->nullable();
            $table->string('keyword05')->nullable();
            $table->string('keyword06')->nullable();
            $table->string('keyword07')->nullable();
            $table->string('keyword08')->nullable();
            $table->string('keyword09')->nullable();
            $table->string('keyword10')->nullable();
            $table->string('keyword11')->nullable();
            $table->string('keyword12')->nullable();
            $table->string('keyword13')->nullable();
            $table->string('keyword14')->nullable();
            $table->string('keyword15')->nullable();
            $table->string('keyword16')->nullable();
            $table->string('keyword17')->nullable();
            $table->string('keyword18')->nullable();
            $table->string('keyword19')->nullable();
            $table->string('keyword20')->nullable();
            $table->string('keyword21')->nullable();
            $table->string('keyword22')->nullable();
            $table->string('keyword23')->nullable();
            $table->string('keyword24')->nullable();
            $table->string('keyword25')->nullable();
            $table->string('mtch_upc1')->nullable();
            $table->string('mtch_upc2')->nullable();
            $table->string('mtch_upc3')->nullable();
            $table->string('kwrd_ftach', 1)->nullable()->change();
            $table->string('kwrd_ovstk', 1)->nullable()->change();
            $table->string('kwrd_cout', 1)->nullable()->change();
            $table->string('kwrd_carvd', 1)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->dropColumn('keyword01');
            $table->dropColumn('keyword02');
            $table->dropColumn('keyword03');
            $table->dropColumn('keyword04');
            $table->dropColumn('keyword05');
            $table->dropColumn('keyword06');
            $table->dropColumn('keyword07');
            $table->dropColumn('keyword08');
            $table->dropColumn('keyword09');
            $table->dropColumn('keyword10');
            $table->dropColumn('keyword11');
            $table->dropColumn('keyword12');
            $table->dropColumn('keyword13');
            $table->dropColumn('keyword14');
            $table->dropColumn('keyword15');
            $table->dropColumn('keyword16');
            $table->dropColumn('keyword17');
            $table->dropColumn('keyword18');
            $table->dropColumn('keyword19');
            $table->dropColumn('keyword20');
            $table->dropColumn('keyword21');
            $table->dropColumn('keyword22');
            $table->dropColumn('keyword23');
            $table->dropColumn('keyword24');
            $table->dropColumn('keyword25');
            $table->dropColumn('mtch_upc1');
            $table->dropColumn('mtch_upc2');
            $table->dropColumn('mtch_upc3');
            $table->string('kwrd_ftach', 1)->nullable(false)->change();
            $table->string('kwrd_ovstk', 1)->nullable(false)->change();
            $table->string('kwrd_cout', 1)->nullable(false)->change();
            $table->string('kwrd_carvd', 1)->nullable(false)->change();
        });
    }
}
