<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Informacion de la tarea</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Tarea</span>
            </label> 
            <input type="text" placeholder="Nombre" class="input input-primary input-bordered" wire:model="tarea" disabled>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Descripcion</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Descripcion de la tarea a realizar" wire:model="descripcion" disabled></textarea>
        </div> 

        <div class="form-control my-3">
            <label class="cursor-pointer label">
              <span class="label-text">{{ ($this->estado)?'Realizada':'Pendiente' }}</span>
              <input type="checkbox" {{$this->estado?'checked':''}} class="checkbox checkbox-primary" disabled>
            </label>
        </div>

        <div class="modal-action">
            <label for="my-modal-2" class="btn" wire:click="closeModal('modalInfo')">Cerrar</label>
        </div>
    </div>
</form>