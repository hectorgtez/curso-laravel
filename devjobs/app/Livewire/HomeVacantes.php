<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithPagination;

class HomeVacantes extends Component
{
    use WithPagination;

    public $termino;
    public $categoria;
    public $salario;

    protected $listeners = ['buscar'];

    public function buscar($termino, $categoria, $salario)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;
    }

    public function render()
    {
        // Consultar todas la vacantes
        // $vacantes = Vacante::all();

        // Consultar vacantes filtradas
        $vacantes = Vacante::when($this->termino, function($query) {
            $query->where('titulo', 'LIKE', '%'.$this->termino.'%');
        })
        ->when($this->termino, function($query) {
            $query->orWhere('empresa', 'LIKE', '%'.$this->termino.'%');
        })
        ->when($this->categoria, function($query) {
            $query->where('categoria_id', $this->categoria);
        })
        ->when($this->salario, function($query) {
            $query->where('salario_id', $this->salario);
        })
        ->paginate(20);

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
