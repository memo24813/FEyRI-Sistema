<div>
    <div class="container mx-auto mt-4 p-5 bg-base-100 rounded-box">
  
        <div class="grid grid-cols-2 gap-5">
            <div>
                <button class="btn btn-secondary" wire:click="create()"><i class="fa-solid fa-box-archive mr-1"></i>Crear Tarea</button>
            </div>


            <div class="form-control">
                <div class="input-group">
                  <select class="w-full select select-bordered" wire:model="buscador">
                    <option value="" selected>Filtrar por</option>
                    <option value="1">Tarea Realizada</option>
                    <option value="0">Tarea No Realizada</option>
                  </select>
                </div>
              </div>

              

            {{-- <div class="form-control">
                <div class="relative">
                  <input type="text" placeholder="Buscar tarea" class="w-full pr-16 input input-primary input-bordered" wire:model="buscador"> 
                  <button class="absolute top-0 right-0 rounded-l-none btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">             
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>             
                    </svg>
                  </button>
                </div>
            </div>   --}}
        </div>
  
        @if($modal)
            @include('livewire.registro-tareas.crear')
        @endif
        @if($modalInfo)
            @include('livewire.registro-tareas.info')
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
                  <th>Tarea</th> 
                  <th>Tarea Realizada</th> 
                  <th>Creado</th>
                  <th>Por</th>
                  <th>Acciones</th>
                </tr>
              </thead> 
              <tbody>
                @forelse ($tareas as $tarea)
                <tr>    
                    <td>{{ $tarea->id }}</td> 
                    <td>{{ $tarea->tarea }}</td> 
                    <td>
                        <div class="form-control">
                            <label class="cursor-pointer label">
                              <span class="label-text">{{ ($tarea->estado)?'Realizada':'Pendiente' }}</span>
                              <input type="checkbox" {{$tarea->estado?'checked':''}} class="checkbox checkbox-primary" wire:click="toggleCheck({{$tarea->id}})">
                            </label>
                        </div>
                    </td>
                    <td>{{ $tarea->created_at->diffForHumans() }}</td>
                    <td>{{ explode(' ',$tarea->name)[0] }}</td>
                    <td>
                      <div class="flex gap-2">
                        <button class="btn btn-primary" wire:click="edit({{ $tarea->id }},'modalInfo')"><i class="fa-solid fa-box-archive mr-1"></i>Ver</button>
                        <button class="btn btn-secondary" wire:click="edit({{ $tarea->id }})" ><i class="fa-solid fa-pencil mr-1"></i>Editar</button>
                        <button class="btn btn-accent" wire:click="delete({{ $tarea->id }})"><i class="fa-solid fa-trash-can mr-1"></i>Eliminar</button>
                      </div>
                    </td>
                  </tr>
                @empty
                    <div class="alert alert-info mb-4">
                      <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                        </svg> 
                        <label>No hay tareas pendientes en el sistema.</label>
                      </div>
                    </div>                
                @endforelse
              </tbody>
            </table>
          </div>

          {{ $tareas->links() }}
    </div>
</div>