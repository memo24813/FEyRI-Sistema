<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Cambiar Contraseña</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Contraseña</span>
            </label> 
            <input type="password" placeholder="Correo electronico" class="input input-primary input-bordered" wire:model.defer="password">
        </div> 
        @error('password') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="modal-action">
            <button for="my-modal-2" class="btn btn-primary" wire:click.prevent="savePassword()">Guardar</button> 
            <label for="my-modal-2" class="btn" wire:click="closeModal('modalPassword')">Cancelar</label>
        </div>
    </div>
</form>