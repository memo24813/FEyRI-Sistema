<?php

namespace App\Http\Livewire;

use App\Models\ReporteFallas as ModelsReporteFallas;
use Livewire\Component;
use Livewire\WithPagination;

class ReporteFallas extends Component
{
    use WithPagination;
    public $id_falla, $equipo, $marca, $modelo, $serie, $inventario, $problema, $solucion, $propietario;
    public $modal = false, $modalVer = false, $fechaInicio='', $fechaFinal='';

    public function render()
    {
        if($this->fechaInicio !== '' && $this->fechaFinal !== ''){
            $reportes = ModelsReporteFallas::whereBetween('created_at', [$this->fechaInicio, $this->fechaFinal])->paginate(10);
        }
        else{
            $reportes = ModelsReporteFallas::paginate(10);
        }
        return view('livewire.reporte-fallas',[
            'fallas' => $reportes,
        ]);
    }


    public function create()
    {
        $this->openModal();
        $this->clearInputs();
    }


    public function save()
    {
        $this->validate([
            'equipo' => 'required | min:3 | max:50',
            'marca' => 'required  | min:3 | max:50',
            'modelo' => 'required | min:3 | max:50',
            'serie' => 'required | min:3 | max:50',
            'inventario' => 'required | min:3 | max:50',
            'problema' => 'required | min:3 | max:255',
            'solucion' => 'required | min:3 | max:255',
            'propietario' => 'required | min:3 | max:50',
        ]);

        ModelsReporteFallas::updateOrCreate(['id' => $this->id_falla],[
            'equipo' => $this->equipo,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'serie' => $this->serie,
            'inventario' => $this->inventario,
            'problema' => $this->problema,
            'solucion' => $this->solucion,
            'propietario' => $this->propietario,
        ]);


        session()->flash('message',
            ($this->id_falla) 
            ? 'Falla actualizada correctamente.' 
            : 'Falla registrada correctamente.');

        $this->closeModal();
        $this->clearInputs();
    }

    public function show($id)
    {
        $this->loadFalla($id);
        $this->openModal('modalVer');
    }


    public function edit($id)
    {
        $this->loadFalla($id);
        $this->openModal();
    }

    public function loadFalla($id)
    {
        $falla = ModelsReporteFallas::findOrFail($id);

        $this->id_falla = $falla->id;
        $this->equipo = $falla->equipo;
        $this->marca = $falla->marca;
        $this->modelo = $falla->modelo;
        $this->serie = $falla->serie;
        $this->inventario = $falla->inventario;
        $this->problema = $falla->problema;
        $this->solucion = $falla->solucion;
        $this->propietario = $falla->propietario;
    }



    public function delete($id)
    {
        ModelsReporteFallas::findOrFail($id)->delete();
        
        
        session()->flash('message', 'Registro de falla eliminada correctamente');
    }


    public function openModal($modal= 'modal')
    {
        $this->{$modal} = true;
    }

    public function closeModal($modal= 'modal')
    {
        $this->{$modal} = false;
    }

    public function clearInputs()
    {
        $this->id_falla = '';
        $this->equipo = '';
        $this->marca = '';
        $this->modelo = '';
        $this->serie = '';
        $this->inventario = '';
        $this->problema = '';
        $this->solucion = '';
        $this->propietario = '';
    }

}
