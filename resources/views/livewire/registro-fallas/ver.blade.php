<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Información de falla y mantenimiento de equipo de computo</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Equipo</span>
            </label> 
            <input type="text" placeholder="Tipo de equipo" class="input input-primary input-bordered" wire:model="equipo" disabled>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Marca</span>
            </label> 
            <input type="text" placeholder="Marca del equipo" class="input input-primary input-bordered" wire:model="marca" disabled>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Modelo</span>
            </label> 
            <input type="text" placeholder="Modelo del equipo" class="input input-primary input-bordered" wire:model="modelo" disabled>
        </div>
        
        <div class="form-control">
            <label class="label">
              <span class="label-text">Serie</span>
            </label> 
            <input type="text" placeholder="Serie del equipo" class="input input-primary input-bordered" wire:model="serie" disabled>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Inventario</span>
            </label> 
            <input type="Numero de inventario del equipo" placeholder="Nombre" class="input input-primary input-bordered" wire:model="inventario" disabled>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Problema</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Problema o inconveniente que tiene el equipo" wire:model="problema" disabled></textarea>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Solucion</span>
            </label> 
            <textarea maxlength="200" class="textarea h-24 textarea-bordered textarea-primary" placeholder="Solucion que se aplico al equipo" wire:model="solucion" disabled></textarea>
        </div> 

        <div class="form-control">
            <label class="label">
              <span class="label-text">Propietario</span>
            </label> 
            <input type="text" placeholder="Nombre del propietario del equipo" class="input input-primary input-bordered" wire:model="propietario" disabled>
        </div> 

        <div class="modal-action">
            <label for="my-modal-2" class="btn" wire:click="closeModal('modalVer')">Cerrar</label>
        </div>
    </div>
</form>