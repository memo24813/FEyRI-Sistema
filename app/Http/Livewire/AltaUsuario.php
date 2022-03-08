<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class AltaUsuario extends Component
{
    use WithPagination;

    public $id_user, $name, $email, $password, $user_type;
    public $modal = false, $modalEdit = false, $modalPassword = false, $buscador = '';
    
    public function render()
    {
        if(!empty($this->buscador))
        {
            $usuarios = User::where('name','like','%'.$this->buscador.'%')->paginate(10);
        }
        else
        {
            $usuarios = User::paginate(10);
        }
        return view('livewire.alta-usuario',[
            'usuarios' => $usuarios,
        ]);
    }


    public function create()
    {
        $this->clearInputs();
        $this->openModal();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'user_type' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'user_type' => $this->user_type
        ]);

        session()->flash('message','Usuario Registrado Correctamente.');
        $this->closeModal();
        $this->clearInputs();
    }

    public function saveEdit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required | email',
            'user_type' => 'required'
        ]);

        $user = User::findOrFail($this->id_user);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->user_type = $this->user_type;

        $user->save();
        session()->flash('message','Usuario Registrado Correctamente.');

        $this->closeModal('modalEdit');
        $this->clearInputs();

    }

    public function savePassword()
    {
        $this->validate([
            'password' => 'required'
        ]);

        $user = User::findOrFail($this->id_user);
        $user->password = Hash::make($this->password);
        $user->save();

        session()->flash('message','Contraseña Modificada Correctamente.');
        $this->closeModal('modalPassword');
        $this->clearInputs();
    }

    public function getPassword($id)
    {
        $this->get($id,'modalPassword');
        $this->password = '';
    }

    public function get($id,$modal = 'modal')
    {
        $this->openModal($modal);
        $usuario = User::findOrFail($id);
        $this->id_user = $usuario->id;
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        $this->password = $usuario->password;
        $this->user_type = $usuario->user_type;
    }

    public function delete($id)
    {
        User::find($id)->delete();

        session()->flash('message','Usuario Eliminado Correctamente.');
    }

    public function openModal($name = 'modal')
    {
        $this->{$name} = true;
    }

    public function closeModal($name = 'modal'){
        $this->{$name} = false;
    }

    public function clearInputs()
    {
        $this->id_user = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->user_type = '';
    }
}
