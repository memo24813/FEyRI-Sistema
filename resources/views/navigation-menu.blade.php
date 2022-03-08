<div class="navbar mb-2 shadow-lg bg-primary text-primary-content rounded-box">
  <div class="px-2 mx-2 navbar-start">
    <span class="text-lg font-bold">
          {{ config('app.name', 'Laravel') }}
          </span>
  </div> 
  <div class="px-2 mx-2 navbar-center lg:flex">
    <div class="flex items-stretch flex-col lg:flex-row">
      <a class="btn btn-ghost btn-sm rounded-btn {{request()->routeIs('dashboard')?'btn-active':''}}" href="{{route('dashboard')}}">
              {{__('Dashboard')}}
      </a>
    </div>
  </div> 
  <div class="navbar-end">
      <div class="flex-none">
      @if(!empty(Auth::user()->profile_photo_path))
          <div class="avatar">
            <div class="rounded-full w-10 h-10 m-1">
              <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
          </div>
      @else
          <div class="avatar placeholder">
              <div class="bg-success text-neutral-content rounded-full w-10 h-10 m-1">
                <span>{{ strtoupper(substr(Auth::user()->name,0,2)) }}</span>
              </div>
          </div>
      @endif
      </div>  
      <form method="POST" action="{{ route('logout') }}" class="dropdown dropdown-end">
          <div tabindex="0" class="m-1 btn btn-ghost btn-sm">
              {{ Auth::user()->name }}
          </div> 
          <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 text-base-content rounded-box w-40">
            <li>
              <a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
            </li>
      @if(Auth::user()->user_type === 'admin')    
            <li>
              <a href="{{ route('alta-usuario') }}">{{ __('Register user') }}</a>
            </li>
      @endif      
            <li>
                  @csrf
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  this.closest('form').submit();">{{ __('Log Out') }}</a>
            </li> 
          </ul>
      </form>
  </div>
</div>