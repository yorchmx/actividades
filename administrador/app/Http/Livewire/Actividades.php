<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Actividade;

class Actividades extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $correo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.actividades.view', [
            'actividades' => Actividade::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('correo', 'LIKE', $keyWord)
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
		$this->nombre = null;
		$this->correo = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'correo' => 'required',
        ]);

        Actividade::create([ 
			'nombre' => $this-> nombre,
			'correo' => $this-> correo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Actividade Successfully created.');
    }

    public function edit($id)
    {
        $record = Actividade::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->correo = $record-> correo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'correo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Actividade::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'correo' => $this-> correo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Actividade Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Actividade::where('id', $id);
            $record->delete();
        }
    }
}
