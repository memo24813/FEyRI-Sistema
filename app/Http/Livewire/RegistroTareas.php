<?php

namespace App\Http\Livewire;

use App\Models\RegistroTareas as ModelsRegistroTareas;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class RegistroTareas extends Component
{

    use WithPagination;

    public $tarea_id, $tarea, $descripcion, $estado = false, $user_id;
    public $modal = false, $modalInfo=false, $buscador = '';

    public function render()
    {
        if($this->buscador != '' || !empty($this->buscador)){
            // $tareas = ModelsRegistroTareas::select('registro_tareas.id','registro_tareas.tarea','registro_tareas.descripcion','registro_tareas.estado','registro_tareas.user_id','users.name','registro_tareas.created_at')
            //     ->where('tarea', 'like', '%' . $this->buscador . '%')
            //     ->join('users', 'users.id', '=', 'registro_tareas.user_id')
            //     ->paginate(10);
            $tareas = ModelsRegistroTareas::select('registro_tareas.id','registro_tareas.tarea','registro_tareas.descripcion','registro_tareas.estado','registro_tareas.user_id','users.name','registro_tareas.created_at')
                ->where('estado', '=', $this->buscador)
                ->join('users', 'users.id', '=', 'registro_tareas.user_id')
                ->paginate(4);
        }
        else
        {
            $tareas = ModelsRegistroTareas::select('registro_tareas.id','registro_tareas.tarea','registro_tareas.descripcion','registro_tareas.estado','registro_tareas.user_id','users.name','registro_tareas.created_at')
                ->join('users','users.id','=','registro_tareas.user_id')
                ->paginate(4);
        }
        return view('livewire.registro-tareas',[
            'tareas' => $tareas
        ]);
    }

    public function clearInputs()
    {
        $this->tarea_id = '';
        $this->tarea = '';
        $this->descripcion = '';
        $this->estado = false;
        $this->user_id = '';
    }

    public function toggleCheck($id)
    {
        $tarea = ModelsRegistroTareas::find($id);
        $tarea->estado = !$tarea->estado;
        $tarea->save();

        session()->flash('message','Tarea actualizada correctamente.');
    }

    public function create()
    {
        $this->clearInputs();
        $this->openModal();
    }

    public function save()
    {
        $this->validate([
            'tarea' => 'required|min:3|max:255',
            'descripcion' => 'required|min:3|max:255',
            'estado' => 'required|boolean',
        ]);

        ModelsRegistroTareas::updateOrCreate(['id' => $this->tarea_id],[
            'tarea' => $this->tarea,
            'descripcion' => $this->descripcion,
            'estado' => $this->estado,
            'user_id' => Auth::user()->id,
        ]);

        session()->flash('message',
        ($this->tarea_id === '') ? 'Tarea creada correctamente' : 'Tarea actualizada correctamente');

        $this->clearInputs();
        $this->closeModal();

    }


    public function edit($id,$modal = 'modal')
    {
        $tarea = ModelsRegistroTareas::findOrFail($id);
        $this->tarea_id = $tarea->id;
        $this->tarea = $tarea->tarea;
        $this->descripcion = $tarea->descripcion;
        $this->estado = $tarea->estado;
        $this->user_id = $tarea->user_id;
        
        $this->openModal($modal);
    }

    public function delete($id)
    {
        ModelsRegistroTareas::findOrFail($id)->delete();

        session()->flash('message', 'Tarea eliminada correctamente');
    }


    public function openModal($modal='modal')
    {
        $this->{$modal} = true;
    }

    public function closeModal($modal='modal')
    {
        $this->{$modal} = false;
    }
}
