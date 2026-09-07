<?php

namespace Database\Seeders;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $informatica = Curso::create(['nome' => 'Informática']);
        $administracao = Curso::create(['nome' => 'Administração']);

        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => "Aluno {$i}",
                'email' => "aluno{$i}@example.com",
                'curso_id' => $i % 2 === 0 ? $informatica->id : $administracao->id,
            ]);
        }
    }
}
