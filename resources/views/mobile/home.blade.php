@extends('layouts.main')

@section('styles')
    
@endsection

@section('content')
<div class="card card-style">
    <div class="content">
        <h4 class="font-600">Let's get Started</h4>
        <p>
            Pilih salah satu menu sesuai dengan role Anda.
        </p>
    </div>
</div>
<div class="row text-center mb-3">
    <a href="/admin/login" class="col-6 pr-2">
        <div class="card card-style mr-0  pt-4 mb-3">
            <h1 class="center-text pt-4">
                <i data-feather="settings" 
                   data-feather-line="1" 
                   data-feather-size="50" 
                   data-feather-color="red2-dark" 
                   data-feather-bg="red2-fade-light">
                </i>
            </h1>
            <h4 class="color-theme font-600">Admin</h4>
            <p class="mt-n2 font-11 color-highlight">
               
            </p>
            <p class="font-10 opacity-30 mb-1">Tap to View</p>
        </div>
    </a>
    <a href="/login" class="col-6 pl-2">
        <div class="card card-style ml-0 mb-3 pt-4">
            <h1 class="center-text pt-4">
                <i data-feather="user" 
                data-feather-line="1" 
                data-feather-size="50" 
                data-feather-color="blue2-dark" 
                data-feather-bg="blue2-fade-light">
                </i>
            </h1>
            <h4 class="color-theme font-600">User</h4>
            <p class="mt-n2 font-11 color-highlight">
                
            </p>
            <p class="font-10 opacity-30 mb-1">Tap to View</p>
        </div>
    </a>
</div>
@endsection


@section('scripts')


@endsection