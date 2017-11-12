@extends('layouts.master')

@section('content')
    <h1>Check-Out</h1>

     <h4>The Total: ${{$total}}</h4>

    <form action="{{route('product.confirm')}}" method="post">
        {{csrf_field()}}
  <div class="form-group">
      <label for="name">Name</label>
      <input  class="form-control" type="text" name="name" required>
  </div>

  <div class="form-group">
      <label for="address">Address</label>
      <input  class="form-control" type="text" name="address" required>
  </div>
  <div class="form-group">
      <label for="Phone">Phone</label>
      <input  class="form-control" type="text" name="phone" required>
  </div>
          <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

@endsection