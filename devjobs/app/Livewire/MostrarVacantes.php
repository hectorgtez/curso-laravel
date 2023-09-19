<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarVacantes extends Component
{
    use WithPagination;

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(2);

        return view('livewire.mostrar-vacantes', [
            "vacantes" => $vacantes
        ]);
    }
}
