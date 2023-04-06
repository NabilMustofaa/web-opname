@extends('layouts.main')

@section('styles')
@endsection

@section('content')
    <form action="/login" method="POST">
        @csrf
        <div class="card card-style">
            <div class="content">
                <h4 class="font-600">Token Task</h4>
                <p>
                    Masukkan token task
                </p>
                <div class="input-style input-style-2 input-required mt-5">
                    <span class="color-highlight">Token</span>
                    <input class="form-control input-light" type="text" name="Token" id="token"
                        placeholder="Masukkan Token">
                </div>
                <button type="button" id="submit-token"
                    class="btn btn btn-border btn-m btn-full mb-3 rounded-sm text-uppercase font-900 border-blue1-dark color-blue1-dark bg-theme col-12">SUBMIT</button>
            </div>
        </div>

        <div class="card card-style d-none" id="card-detail">
            <div class="content">

                <h4 class="font-600">Detail Task</h4>
                <p>
                    Pilih sesuai nama anda
                </p>
                <div class="mt-5">
                    <div class="d-flex mb-4">
                        <img src="{{ asset('template/images/icons/ic_project_name.svg') }}" alt="img" class="img-fluid">
                        <div class="ml-2">
                            <p class="title">Task</p>
                            <p class="description" id="Description">Stock</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('template/images/icons/ic_location.svg') }}" alt="img" class="img-fluid">
                        <div class="ml-2">
                            <p class="title">Lokasi</p>
                            <p class="description" id="Location">Stock</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('template/images/icons/ic_calendar.svg') }}" alt="img" class="img-fluid">

                        <div class="ml-2">
                            <p class="title">Periode</p>
                            <p class="description" id="Date">Stock</p>
                        </div>
                    </div>
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Pilih User</span>
                    <select class="form-control input-light" name="Operator" id="Operator">
                        <option>Select User</option>
                    </select>
                </div>
                <div class="divider m-0"></div>
                <button class="btn btn-full btn-m rounded-card col-12 font-500 bg-highlight col-12 mt-4" type="submit"
                      id="login">MULAI OPNAME</button>
                  
              </div>
            </div>
        </div>

        

    </form>
    {{-- <form action="/login" method="POST">
    @csrf
    <input type="text" name="token" id="token" placeholder="Input token">
    <button type="button" id="search-token">Search</button>
    <input type="hidden" id="TaskId" name="TaskId">
    <select name="Operator" id="Operator">
      <option>Select User</option>
    </select>
  
    <button type="submit" id="login">Login</button>
  </form> --}}
@endsection


@section('scripts')
    <script src="{{ asset('js/mobile/login.js') }}"></script>
@endsection
