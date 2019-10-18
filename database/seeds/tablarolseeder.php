<?php

use Illuminate\Database\Seeder;

class tablarolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=[
            'administrador',
            'editor',
            'supervior'
        ];
        foreach($rol as $key =>$value){
            DB::table('rol')->insert([
                'nombre' => $value
                
            ]);
        }   
     }
}
