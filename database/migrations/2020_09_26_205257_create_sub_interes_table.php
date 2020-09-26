<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubInteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS sub_interes(
            id          int(255) auto_increment not null,
            id_interes  int(255),    
            sinteres    varchar(255),
            CONSTRAINT pk_users PRIMARY KEY(id)
        )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_interes');
    }
}
