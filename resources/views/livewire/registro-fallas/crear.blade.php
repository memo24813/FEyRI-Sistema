<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Reporte de falla y mantenimiento de equipo de computo</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Equipo</span>
            </label> 
            <input type="text" placeholder="Tipo de equipo" class="input input-primary input-bordered" wire:model.defer="equipo">
        </div> 
        @error('equipo') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Marca</span>
            </label> 
            <input type="text" placeholder="Marca del equipo" class="input input-primary input-bordered" wire:model.defer="marca">
        </div> 
        @error('marca') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Modelo</span>
            </label> 
            <input type="text" placeholder="Modelo del equipo" class="input input-primary input-bordered" wire:model.defer="modelo">
        </div>
        @error('modelo') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror
        
        <div class="form-control">
            <label class="label">
              <span class="label-text">Serie</span>
            </label> 
            <input type="text" placeholder="Serie del equipo" class="input input-primary input-bordered" wire:model.defer="serie">
        </div> 
        @error('serie') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Inventario</span>
            </label> 
            <input type="Numero de inventario del equipo" placeholder="Nombre" class="input input-primary input-bordered" wire:model.defer="inventario">
        </div> 
        @error('inventario') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Problema</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Problema o inconveniente que tiene el equipo" wire:model.defer="problema"></textarea>
        </div> 
        @error('problema') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Solucion</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Solucion que se aplico al equipo" wire:model.defer="solucion"></textarea>
        </div> 
        @error('solucion') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror


        <div class="form-control">
            <label class="label">
              <span class="label-text">Propietario</span>
            </label> 
            <input type="text" placeholder="Nombre del propietario del equipo" class="input input-primary input-bordered" wire:model.defer="propietario">
        </div> 
        @error('propietario') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="modal-action">
            <button for="my-modal-2" class="btn btn-primary" wire:click.prevent="save()">Guardar</button> 
            <label for="my-modal-2" class="btn" wire:click="closeModal()">Cancelar</label>
        </div>
    </div>
</form>