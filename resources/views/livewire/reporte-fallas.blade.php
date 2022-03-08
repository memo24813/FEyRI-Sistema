<div>
    <div class="container mx-auto mt-4 p-5 bg-base-100 rounded-box">
  
        <div class="grid grid-cols-2 gap-5">
            <div>
                <button class="btn btn-secondary" wire:click="create()"><i class="fa-solid fa-triangle-exclamation mr-1"></i>Registrar Falla</button>
            </div>
            <div>
              <div class="grid grid-cols-2">
                <div class="form-control">
                  <label class="input-group">
                    <span>Fecha Inicio: </span>
                    <input type="date" class="input input-bordered" wire:model="fechaInicio">
                  </label>
                </div> 
                <div class="form-control">
                  <label class="input-group">
                    <span>Fecha Final: </span>
                    <input type="date" class="input input-bordered" wire:model="fechaFinal">
                  </label>
                </div> 
              </div>
            </div>
        </div>
  
        @if($modal)
            @include('livewire.registro-fallas.crear')
        @endif
        @if($modalVer)
            @include('livewire.registro-fallas.ver')
        @endif
    </div>
  
    @if(session()->has('message'))
      <div class="container mx-auto mt-4 p-5">
        <div class="alert alert-success">
          <div class="flex-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
            </svg> 
            <label>{{session('message')}}</label>
          </div>
        </div>
      </div>
    @endif
  
    <div class="container mx-auto mt-4 p-5 bg-base-100 rounded-box">
        <div class="overflow-x-auto">
            <table class="table w-full">
              <thead>
                <tr>
                  <th>ID</th> 
                  <th>Equipo</th> 
                  <th>Marca</th> 
                  <th>Modelo</th>
                  <th>Problema</th>
                  <th>Propietario</th>
                  <th>Fecha</th>
                  <th>Acciones</th>
                </tr>
              </thead> 
              <tbody>
                @forelse ($fallas as $falla)
                <tr>    
                    <td>{{ $falla->id }}</td> 
                    <td>{{ $falla->equipo }}</td> 
                    <td>{{ $falla->marca }}</td> 
                    <td>{{ $falla->modelo }}</td> 
                    <td>{{ $falla->problema }}</td> 
                    <td>{{ $falla->propietario }}</td> 
                    <td>{{ $falla->created_at->format('d/m/Y') }}</td> 
                    <td>
                      <div class="flex gap-2">
                        <button class="btn btn-primary" wire:click="show({{ $falla->id }})"><i class="fa-solid fa-box-archive mr-1"></i>Ver</button>
                        <button class="btn btn-secondary" wire:click="edit({{ $falla->id }})"><i class="fa-solid fa-pencil mr-1"></i>Editar</button>
                        <button class="btn btn-accent" wire:click="delete({{ $falla->id }})"><i class="fa-solid fa-trash-can mr-1"></i>Eliminar</button>
                      </div>
                    </td>
                  </tr>
                @empty
                    <div class="alert alert-info mb-4">
                      <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                        </svg> 
                        <label>No hay usuarios registrados en el sistema.</label>
                      </div>
                    </div>                
                @endforelse
              </tbody>
            </table>
          </div>

          {{ $fallas->links() }}
    </div>
</div>