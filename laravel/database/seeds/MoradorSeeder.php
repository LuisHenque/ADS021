<?php

use Illuminate\Database\Seeder;

class MoradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            ['nome' => 'Paulo Guedes', 'cpf' => '64598254785', 'email' => 'guedes@yahoo.com.br', 'telefone' => '999999999','unidade' => '710J', 'placa' =>  'LLL9999','veiculo' => 'Corsa'],
            ['nome' => 'Sabrina', 'cpf' => '01947298248', 'email' => 'sabrina@gmail.com', 'telefone' => '912365478','unidade' => '', 'placa' =>  '','veiculo' => ''],
//            ['nome' => '', 'cpf' => '', 'email' => '', 'telefone' => '','unidade' => '', 'placa' =>  '','veiculo' => ''],

            ['nome' => 'Joaquim', 'cpf' => '39712846528', 'email' => 'joaquim@iesb.com', 'telefone' => '964287139','unidade' => '318B', 'placa' => 'WWW3489', 'veiculo' => 'gol']
        ]);
    }
}
