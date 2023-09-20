<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class MostrarVacantes extends Component
{
    use WithPagination;

    protected $listeners = ['eliminarVacante'];

    public function eliminarVacante(Vacante $vacante)
    {
        // Eliminar imagen
        if( $vacante->imagen ) {
            Storage::delete('public/vacantes/' . $vacante->imagen);
        }

        // Eliminar CVs
        // if( $vacante->candidatos->count() ) {
        //     foreach( $vacante->candidatos as $candidato ) {
        //         if( $candidato->cv ) {
        //             Storage::delete('public/cv/' . $candidato->cv);
        //         }
        //     }
        // }

        // Eliminar vacante
        $vacante->delete();
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-vacantes', [
            "vacantes" => $vacantes
        ]);
    }
}
