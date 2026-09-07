<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'professor'], true);
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin' || $user->id === $aluno->user_id;
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'professor'], true);
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin' || $user->id === $aluno->user_id;
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin' || $user->id === $aluno->user_id;
    }
}
