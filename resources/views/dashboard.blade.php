<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto gap-2 sm:px-6 lg:px-8 grid place-items-center md:grid-cols-2 lg:grid-cols-3">

            <div class="card max-w-full w-96 bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="300" height="150" class="fill-primary">
                    <path d="M344 240h-56L287.1 152c0-13.25-10.75-24-24-24h-16C234.7 128 223.1 138.8 223.1 152L224 240h-56c-9.531 0-18.16 5.656-22 14.38C142.2 263.1 143.9 273.3 150.4 280.3l88.75 96C243.7 381.2 250.1 384 256.8 384c7.781-.3125 13.25-2.875 17.75-7.844l87.25-96c6.406-7.031 8.031-17.19 4.188-25.88S353.5 240 344 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"/>
                  </svg>
                  {{-- <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="rounded-xl"> --}}
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Baja de equipo</h2>
                  <p>Sistema para registro de bajas de equipo de computo</p>
                  <div class="card-actions">
                    <button class="btn btn-primary">Acceder</button>
                  </div>
                </div>
            </div>

            <div class="card max-w-full w-96 bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="300" height="150" class="fill-primary"> 
                    <path d="M152.1 38.16C161.9 47.03 162.7 62.2 153.8 72.06L81.84 152.1C77.43 156.9 71.21 159.8 64.63 159.1C58.05 160.2 51.69 157.6 47.03 152.1L7.029 112.1C-2.343 103.6-2.343 88.4 7.029 79.03C16.4 69.66 31.6 69.66 40.97 79.03L63.08 101.1L118.2 39.94C127 30.09 142.2 29.29 152.1 38.16V38.16zM152.1 198.2C161.9 207 162.7 222.2 153.8 232.1L81.84 312.1C77.43 316.9 71.21 319.8 64.63 319.1C58.05 320.2 51.69 317.6 47.03 312.1L7.029 272.1C-2.343 263.6-2.343 248.4 7.029 239C16.4 229.7 31.6 229.7 40.97 239L63.08 261.1L118.2 199.9C127 190.1 142.2 189.3 152.1 198.2V198.2zM224 96C224 78.33 238.3 64 256 64H480C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H256C238.3 128 224 113.7 224 96V96zM224 256C224 238.3 238.3 224 256 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H256C238.3 288 224 273.7 224 256zM160 416C160 398.3 174.3 384 192 384H480C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416zM0 416C0 389.5 21.49 368 48 368C74.51 368 96 389.5 96 416C96 442.5 74.51 464 48 464C21.49 464 0 442.5 0 416z"/>\
                  </svg>
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Registro de tareas</h2>
                  <p>Sistema para registro de tareas o actividades pendientes a realizar.</p>
                  <div class="card-actions">
                    {{-- <a class="btn btn-primary" href="{{route('registro-tareas')}}">Acceder</a> --}}
                    <div class="indicator">
                      @if($tasksLength > 0)
                        <span class="indicator-item badge badge-secondary">{{$tasksLength}}</span> 
                      @endif
                      <a class="btn btn-primary" href="{{route('registro-tareas')}}">Acceder</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card max-w-full w-96 bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                  {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="300" height="150" class="fill-primary">
                    <path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"/> 
                  </svg> --}}

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="300" height="150" class="fill-primary">
                    <path d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z"/>
                  </svg>
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Reporte de Fallas</h2>
                  <p>Sistema para reporte de fallas y mantenimientos en laboratorios de computo.</p>
                  <div class="card-actions">
                    <a class="btn btn-primary" href="{{route('reporte-fallas')}}">Acceder</a>
                  </div>
                </div>
            </div>




        </div>
    </div>
</x-app-layout>
