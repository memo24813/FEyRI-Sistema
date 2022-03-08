<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Crear Tarea</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Tarea</span>
            </label> 
            <input type="text" placeholder="Nombre" class="input input-primary input-bordered" wire:model="tarea">
        </div> 
        @error('tarea') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Descripcion</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Descripcion de la tarea a realizar" wire:model="descripcion"></textarea>
        </div> 
        @error('descripcion') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control my-3">
            <label class="cursor-pointer label">
              <span class="label-text">Tarea Realizada</span>
              <input type="checkbox" class="checkbox checkbox-primary" wire:model="estado">
            </label>
        </div>
        @error('estado') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror


        <div class="modal-action">
            <button for="my-modal-2" class="btn btn-primary" wire:click.prevent="save()">Guardar</button> 
            <label for="my-modal-2" class="btn" wire:click="closeModal()">Cancelar</label>
        </div>
    </div>
</form>