<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')                
            ]);
        }   
     }
}   
