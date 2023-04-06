@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<div class="card card-style">
  <div class="content mb-0"> 
    <h3>Create New Opname Activity</h3>
      <p>
        {{-- Basic form elements --}}
      </p>
      <form class="forms-sample">
        <div class="input-style input-style-2 has-icon input-required">
          <i class="input-icon fa fa-user"></i>
          <span class="color-highlight">Name</span>
          <em>(required)</em>
          <input class="form-control" type="name" placeholder="Name" name="name" id="name">
        </div> 
        <div class="input-style input-style-2 has-icon input-required">
          <i class="input-icon fa fa-map-marker"></i>
          <span class="color-highlight">Location</span>
          <em>(required)</em>
          <input class="form-control" type="text" placeholder="Location" name="location" id="location">
        </div>

        <div class="d-flex justify-content-between">
          <div class="col-6 p-0 pr-2">
            <div class="input-style input-style-2 has-icon input-required">
              <i class="input-icon fa fa-calendar"></i>
              <span class="color-highlight">Start Date</span>
              <em>(required)</em>
              <input class="form-control" type="date" placeholder="Start Date" name="start-date" id="start-date">
            </div>
          </div>

          <div class="col-6 p-0 pl-2">
            <div class="input-style input-style-2 has-icon input-required">
              <i class="input-icon fa fa-calendar"></i>
              <span class="color-highlight">End Date</span>
              <em>(required)</em>
              <input class="form-control" type="date" placeholder="End Date" name="end-date" id="end-date">
            </div>
          </div>
        </div>

        <div class="input-style input-style-2 has-icon input-required">
          <i class="input-icon fa fa-calendar"></i>
          <span class="color-highlight">Keyword</span>
          <em>(required)</em>
          <input class="form-control" type="text" placeholder="Keyword" name="keyword" id="keyword">
        </div>
        <div class="d-flex">
          <button type="submit" class="btn btn-m btn-full mb-3 mr-3 rounded-xs text-uppercase font-900 shadow-s bg-blue1-dark">Submit</button>
          <a href="/admin" class="btn btn-border btn-m btn-full mb-3 rounded-xs text-uppercase font-900 border-blue1-dark color-blue1-dark bg-theme">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('scripts')

@endsection