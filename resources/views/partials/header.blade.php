<div class="page-title page-title-large">
  {{-- <h2 data-username="John Doe" 
  class="greeting-text"></h2> --}}
  @if (request()->is('/'))
  <div class=" text-center">
    <h2 class="text-light">Stock Opname</h2>
    <p class="text-light">App Tools </p>
  </div>

  @else
  @if (auth()->guard('mobile')->check())
  <div class="d-flex justify-content-between">
    <div>
      <p class="text-light">Selamat Bekerja</p>
      <h2 class="text-light">{{ auth()->guard('mobile')->user()->Operator }}</h2>
    </div>
    <form action="/logout" method="POST" class="my-auto">
      @csrf
      <button type="submit" id="login" class="btn">
        <img src="{{ asset('template/images/icons/ic_logout.svg') }}" alt="img" class="img-fluid">
      </button>
    </form>
  </div>
    
  @else
  <div class="d-flex">
    <a href="#" data-back-button class="header-icon header-icon-1 mr-3">
      <i class="fas fa-arrow-left text-light"></i>
    </a>
    <h2 class="text-light">User Login</h2>
  </div>
  @endif
  @endif


  
</div>
<div class="card header-card shape-rounded" data-card-height="180">
  <div class="card-overlay bg-highlight opacity-95"></div>
  <div class="card-overlay dark-mode-tint"></div>
  <div class="card-bg preload-img" data-src="{{ asset('template/images/warehouse-bg.jpg') }}"></div>
</div>