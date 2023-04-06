@extends('layouts.main')

@section('style')

@endsection

@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Create New Opname Activity</h4>
      <p class="card-description">
        {{-- Basic form elements --}}
      </p>
      <form class="forms-sample">
        <div class="form-group">
          <label>Select Opname Activity</label>
          <select class="js-example-basic-single w-100">
            <option value="1">Opname Malang</option>
          </select>
        </div>
        <div class="form-group">
          <label for="user">Activity user</label>
          <input type="text" class="form-control" id="user" placeholder="user">\
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>


@endsection

@section('script')

@endsection