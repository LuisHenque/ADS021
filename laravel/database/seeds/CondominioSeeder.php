<?php

use Illuminate\Database\Seeder;

class CondominioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            ['nome' => 'Por do Sol', 'cnpj' => '56213470000172', 'endereco' => 'Scls 115 Lote 29', 'cep' => '82314068','bairro' => 'Aguas Claras', 'cidade' =>  'Brasilia','uf' => 'DF'],
//            ['nome' => '', 'cnpj' => '', 'endereco' => '', 'cep' => '','bairro' => '', 'cidade' =>  '','uf' => ''],
            ['nome' => 'Allegro', 'cnpj' => '65847214556485', 'endereco' => 'QNN 27 Lote 273', 'cep' => '64789240','bairro' => 'Ceilandia', 'cidade' =>  'Brasilia','uf' => 'DF']
        ]);
    }
}
