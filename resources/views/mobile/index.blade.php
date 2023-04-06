@extends('layouts.main')

@section('styles')

<style>
  #reader video{
    border-radius: 15px
  }
</style>

@endsection

@section('content')
    <div class="px-4">
        <p class="text-light title">Task</p>
        <h6 class="text-light ">{{ $Task->Description }}</h6>
    </div>

    <div class="card card-style mt-4">
        <div class="content">
            <h4 class="font-600">Pilih Lokasi</h4>
            <p>
                Input / scan barcode untuk kode gudang
            </p>
            <div class="d-flex justify-content-between flex-row">
                <div class="input-style input-style-2 input-required p-0 mt-5 input-barcode">
                    <span class="color-highlight">Kode Lokasi</span>
                    <input class="form-control input-light" type="text" name="Keyword" id="Keyword"
                        placeholder="Kode Lokasi">
                </div>
                <div class="input-style input-style-2 input-required mt-5">
                    <button
                        class="btn form-control input-light d-flex justify-content-center align-items-center btn-barcode"
                        type="button" id="scan-barcode">
                        <img src="{{ asset('template/images/icons/ic_scan.svg') }}" alt="img" class="img-fluid">
                    </button>
                </div>
            </div>
            <a href="#" type="button" id="submit-keyword" data-menu="menu-scan-barcode"
                class="btn btn btn-border btn-m btn-full mb-3 rounded-sm text-uppercase font-900 border-blue1-dark color-blue1-dark bg-theme col-12">SUBMIT</a>
        </div>
    </div>

    <div class="card card-style mt-4">
        <div class="content">
            <h4 class="font-600">List Lokasi</h4>
            <p>
                Lokasi gudang yang sudah dilakukan
            </p>
            <div class="mt-5">
                <div class="d-flex my-3">
                    <img src="{{ asset('template/images/icons/ic_warehouse.svg') }}" alt="img" class="img-fluid">
                    <div class="ml-3">
                        <p class="description">Gudang 1</p>
                        <p class="title">Kode Gudang 1</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <div id="menu-scan-barcode" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="400" data-menu-effect="menu-over" style="height: 320px; display: block;">
      <div class="content mb-0">
          <h1 class="font-700 mb-0">Scan Barcode</h1>
          <div id="reader" class="my-5"></div>
          <a href="#" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue1-dark mt-4">CLOSE</a>
      </div>
  </div>
    <div class="menu-hider"></div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="{{ asset('js/mobile/index.js') }}" type="text/javascript"></script>
@endsection
