<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE users(
            id          int(255) auto_increment not null,
            name      varchar(100),
            a_paterno   varchar(100),
            a_materno   varchar(100),
            genero      varchar(100),
            edad        int(255),
            e_civil     varchar(100),
            email       varchar(100),
            password    varchar(255),        
            n_interes   varchar(255),
            created_at  datetime,
            updated_at  datetime,
            remember_token varchar(255),
            PRIMARY KEY(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
