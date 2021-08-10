@extends('master')
@section('content')
<form class="row g-3" method="post" action="{{route('store')}}">
    @csrf
    <h4 class="col-12">Create Product</h4>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Ten Dai Ly</label>
        <input type="text" name="name" class="form-control" >
        @error('name')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" >
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Email</label>
        <input type="email" name="email" class="form-control"  >
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">User_manage</label>
        <input type="text" name="user_manage" class="form-control" >
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Ma_DL</label>
        <input type="text" name="mdl" class="form-control" id="inputZip">
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Status</label><br>
        <select class="form-select" name="status" aria-label="Default select example">
            <option value="0">Hết Hàng</option>
            <option value="1">Còn Hàng</option>
        </select>
{{--        <input type="number" name="status" class="form-control" id="inputZip">--}}
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</form>
@endsection
