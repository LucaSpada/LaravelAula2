<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       Mensagem::create([
            'title' => 'Mensagem1',
            'texto' => 'aaaaaaaaa',
            'autor' => 'Heibes'
        ]);

        Mensagem::create([
            'title' => 'Mensagem2',
            'texto' => 'bbbbbbbbbb',
            'autor' => 'Screibes'
        ]);

    }
}
