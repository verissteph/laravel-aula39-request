<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //para editar a tabela movies
        Schema::table('movies',function(Blueprint $table){
            $table->float('value_tickets');
            $table->string('title',200)->change();
            $table->dropColumn('awards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Quando eu for usar o rollback vai realizar isso ao inves de apagar toda a tabela.
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('value_tickets');
            $table->string('title', 500)->change();
            $table->integer('awards')->unsigned();
        });
    }
}
