<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Deporte;

class Deportes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_actividad, $edad, $lugar, $dias, $grupo1, $grupo2, $grupo3, $grupo4, $grupo5, $horario_grupo1, $horario_grupo2, $horario_grupo3, $horario_grupo4, $horario_grupo5, $nombre_profesor, $costo_clase, $costo_mensual_paquete1, $costo_mensual_paquete2, $costo_mensual_paquete3, $costo_mensual_paquete4;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.deportes.view', [
            'deportes' => Deporte::latest()
						->orWhere('nombre_actividad', 'LIKE', $keyWord)
						->orWhere('edad', 'LIKE', $keyWord)
						->orWhere('lugar', 'LIKE', $keyWord)
						->orWhere('dias', 'LIKE', $keyWord)
						->orWhere('grupo1', 'LIKE', $keyWord)
						->orWhere('grupo2', 'LIKE', $keyWord)
						->orWhere('grupo3', 'LIKE', $keyWord)
						->orWhere('grupo4', 'LIKE', $keyWord)
						->orWhere('grupo5', 'LIKE', $keyWord)
						->orWhere('horario_grupo1', 'LIKE', $keyWord)
						->orWhere('horario_grupo2', 'LIKE', $keyWord)
						->orWhere('horario_grupo3', 'LIKE', $keyWord)
						->orWhere('horario_grupo4', 'LIKE', $keyWord)
						->orWhere('horario_grupo5', 'LIKE', $keyWord)
						->orWhere('nombre_profesor', 'LIKE', $keyWord)
						->orWhere('costo_clase', 'LIKE', $keyWord)
						->orWhere('costo_mensual_paquete1', 'LIKE', $keyWord)
						->orWhere('costo_mensual_paquete2', 'LIKE', $keyWord)
						->orWhere('costo_mensual_paquete3', 'LIKE', $keyWord)
						->orWhere('costo_mensual_paquete4', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre_actividad = null;
		$this->edad = null;
		$this->lugar = null;
		$this->dias = null;
		$this->grupo1 = null;
		$this->grupo2 = null;
		$this->grupo3 = null;
		$this->grupo4 = null;
		$this->grupo5 = null;
		$this->horario_grupo1 = null;
		$this->horario_grupo2 = null;
		$this->horario_grupo3 = null;
		$this->horario_grupo4 = null;
		$this->horario_grupo5 = null;
		$this->nombre_profesor = null;
		$this->costo_clase = null;
		$this->costo_mensual_paquete1 = null;
		$this->costo_mensual_paquete2 = null;
		$this->costo_mensual_paquete3 = null;
		$this->costo_mensual_paquete4 = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_actividad' => 'required',
		'edad' => 'required',
		'lugar' => 'required',
		'dias' => 'required',
		'grupo1' => 'required',
		'grupo2' => 'required',
		'grupo3' => 'required',
		'grupo4' => 'required',
		'grupo5' => 'required',
		'horario_grupo1' => 'required',
		'horario_grupo2' => 'required',
		'horario_grupo3' => 'required',
		'horario_grupo4' => 'required',
		'horario_grupo5' => 'required',
		'nombre_profesor' => 'required',
		'costo_clase' => 'required',
		'costo_mensual_paquete1' => 'required',
		'costo_mensual_paquete2' => 'required',
		'costo_mensual_paquete3' => 'required',
		'costo_mensual_paquete4' => 'required',
        ]);

        Deporte::create([ 
			'nombre_actividad' => $this-> nombre_actividad,
			'edad' => $this-> edad,
			'lugar' => $this-> lugar,
			'dias' => $this-> dias,
			'grupo1' => $this-> grupo1,
			'grupo2' => $this-> grupo2,
			'grupo3' => $this-> grupo3,
			'grupo4' => $this-> grupo4,
			'grupo5' => $this-> grupo5,
			'horario_grupo1' => $this-> horario_grupo1,
			'horario_grupo2' => $this-> horario_grupo2,
			'horario_grupo3' => $this-> horario_grupo3,
			'horario_grupo4' => $this-> horario_grupo4,
			'horario_grupo5' => $this-> horario_grupo5,
			'nombre_profesor' => $this-> nombre_profesor,
			'costo_clase' => $this-> costo_clase,
			'costo_mensual_paquete1' => $this-> costo_mensual_paquete1,
			'costo_mensual_paquete2' => $this-> costo_mensual_paquete2,
			'costo_mensual_paquete3' => $this-> costo_mensual_paquete3,
			'costo_mensual_paquete4' => $this-> costo_mensual_paquete4
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Deporte Successfully created.');
    }

    public function edit($id)
    {
        $record = Deporte::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre_actividad = $record-> nombre_actividad;
		$this->edad = $record-> edad;
		$this->lugar = $record-> lugar;
		$this->dias = $record-> dias;
		$this->grupo1 = $record-> grupo1;
		$this->grupo2 = $record-> grupo2;
		$this->grupo3 = $record-> grupo3;
		$this->grupo4 = $record-> grupo4;
		$this->grupo5 = $record-> grupo5;
		$this->horario_grupo1 = $record-> horario_grupo1;
		$this->horario_grupo2 = $record-> horario_grupo2;
		$this->horario_grupo3 = $record-> horario_grupo3;
		$this->horario_grupo4 = $record-> horario_grupo4;
		$this->horario_grupo5 = $record-> horario_grupo5;
		$this->nombre_profesor = $record-> nombre_profesor;
		$this->costo_clase = $record-> costo_clase;
		$this->costo_mensual_paquete1 = $record-> costo_mensual_paquete1;
		$this->costo_mensual_paquete2 = $record-> costo_mensual_paquete2;
		$this->costo_mensual_paquete3 = $record-> costo_mensual_paquete3;
		$this->costo_mensual_paquete4 = $record-> costo_mensual_paquete4;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre_actividad' => 'required',
		'edad' => 'required',
		'lugar' => 'required',
		'dias' => 'required',
		'grupo1' => 'required',
		'grupo2' => 'required',
		'grupo3' => 'required',
		'grupo4' => 'required',
		'grupo5' => 'required',
		'horario_grupo1' => 'required',
		'horario_grupo2' => 'required',
		'horario_grupo3' => 'required',
		'horario_grupo4' => 'required',
		'horario_grupo5' => 'required',
		'nombre_profesor' => 'required',
		'costo_clase' => 'required',
		'costo_mensual_paquete1' => 'required',
		'costo_mensual_paquete2' => 'required',
		'costo_mensual_paquete3' => 'required',
		'costo_mensual_paquete4' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Deporte::find($this->selected_id);
            $record->update([ 
			'nombre_actividad' => $this-> nombre_actividad,
			'edad' => $this-> edad,
			'lugar' => $this-> lugar,
			'dias' => $this-> dias,
			'grupo1' => $this-> grupo1,
			'grupo2' => $this-> grupo2,
			'grupo3' => $this-> grupo3,
			'grupo4' => $this-> grupo4,
			'grupo5' => $this-> grupo5,
			'horario_grupo1' => $this-> horario_grupo1,
			'horario_grupo2' => $this-> horario_grupo2,
			'horario_grupo3' => $this-> horario_grupo3,
			'horario_grupo4' => $this-> horario_grupo4,
			'horario_grupo5' => $this-> horario_grupo5,
			'nombre_profesor' => $this-> nombre_profesor,
			'costo_clase' => $this-> costo_clase,
			'costo_mensual_paquete1' => $this-> costo_mensual_paquete1,
			'costo_mensual_paquete2' => $this-> costo_mensual_paquete2,
			'costo_mensual_paquete3' => $this-> costo_mensual_paquete3,
			'costo_mensual_paquete4' => $this-> costo_mensual_paquete4
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Deporte Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Deporte::where('id', $id);
            $record->delete();
        }
    }
}
