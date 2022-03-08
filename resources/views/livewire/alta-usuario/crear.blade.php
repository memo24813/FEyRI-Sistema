<form class="modal modal-open">
    <div class="modal-box">

        <h3 class="text-center font-bold text-lg">Crear Usuario</h3>

        <div class="form-control">
            <label class="label">
              <span class="label-text">Nombre</span>
            </label> 
            <input type="text" placeholder="Nombre" class="input input-primary input-bordered" wire:model="name">
        </div> 
        @error('name') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Correo Electronico</span>
            </label> 
            <input type="text" placeholder="Correo electronico" class="input input-primary input-bordered" wire:model="email">
        </div> 
        @error('email') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
              <span class="label-text">Contraseña</span>
            </label> 
            <input type="password" placeholder="Correo electronico" class="input input-primary input-bordered" wire:model="password">
        </div> 
        @error('password') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror

        <div class="form-control">
            <label class="label">
                <span class="label-text">Tipo de Usuario</span>
            </label> 
            <select class="select w-full  select-bordered select-primary" wire:model="user_type">
                <option selected> --SELECCIONA-- </option>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        @error('user_type') <span class="block mx-2 mt-1 text-error">{{ $message }}</span>@enderror


        <div class="modal-action">
            <button for="my-modal-2" class="btn btn-primary" wire:click.prevent="save()">Guardar</button> 
            <label for="my-modal-2" class="btn" wire:click="closeModal()">Cancelar</label>
        </div>
    </div>
</form>