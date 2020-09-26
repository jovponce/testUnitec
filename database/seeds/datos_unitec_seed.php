<?php

use Illuminate\Database\Seeder;

class datos_unitec_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ecivil')->insert(array(
            'estado' =>'Soltero'
        ));
        DB::table('ecivil')->insert(array(
            'estado' =>'Casado'
        ));
        DB::table('ecivil')->insert(array(
            'estado' =>'Unión libre'
        ));
        DB::table('genero')->insert(array(
            'genero' =>'Masculino'
        ));
        DB::table('genero')->insert(array(
            'genero' =>'Femenino'
        ));
        DB::table('n_interes')->insert(array(
            'interes' =>'Preparatoria'
        ));
        DB::table('n_interes')->insert(array(
            'interes' =>'Licenciatura'
        ));
        DB::table('n_interes')->insert(array(
            'interes' =>'Posgrado'
        ));
        DB::table('sub_interes')->insert(array(
            'id_interes' =>'1',
            'sinteres' =>'Preparatoria'
        ));
        DB::table('sub_interes')->insert(array(
            'id_interes' =>'2',
            'sinteres' =>'Lic. En Derecho'
        ));
        DB::table('sub_interes')->insert(array(
            'id_interes' =>'2',
            'sinteres' =>'Lic. En Finanzas'
        ));
        DB::table('sub_interes')->insert(array(
            'id_interes' =>'3',
            'sinteres' =>'Mtria. Admon. De Negocios'
        ));
        DB::table('sub_interes')->insert(array(
            'id_interes' =>'3',
            'sinteres' =>'Mtria. Direccion de proyectos'
        ));
        
        
    }
}
