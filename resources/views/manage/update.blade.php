@extends('master')
@section('content')
    <form class="row g-3" method="post" action="{{route('update',$product->id)}}">
        @csrf
        <h4 class="col-12">Update Product</h4>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ten Dai Ly</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control" >
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$product->phone}}">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{$product->address}}">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Email</label>
            <input type="email" name="email" class="form-control"  value="{{$product->email}}">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">User_manage</label>
            <input type="text" name="user_manage" class="form-control" value="{{$product->user_manage}}">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Ma_DL</label>
            <input type="text" name="mdl" class="form-control" id="inputZip" value="{{$product->mdl}}">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Status</label><br>
            <select class="form-select" name="status" aria-label="Default select example">
                @if($product->status == 1)
                    <option value="1">Còn Hàng</option>
                    <option value="0">Hết Hàng</option>
                @else
                    <option value="0">Hết Hàng</option>
                    <option value="1">Còn Hàng</option>
                @endif
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
