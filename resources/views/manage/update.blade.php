@extends('master')
@section('content')
    <form class="row g-3" method="post" action="{{route('update',$product->id)}}">
        @csrf
        <h4 class="col-12">Update Product</h4>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ten Dai Ly</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control @error('name') is-invalid @enderror" >
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$product->phone}}">
            @error('phone')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$product->address}}">
            @error('address')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{$product->email}}">
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">User_manage</label>
            <input type="text" name="user_manage" class="form-control @error('user_manage') is-invalid @enderror" value="{{$product->user_manage}}">
            @error('user_manage')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Ma_DL</label>
            <input type="text" name="mdl" class="form-control @error('mdl') is-invalid @enderror" value="{{$product->mdl}}">
            @error('mdl')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Status</label><br>
            <select class="form-select" name="status" aria-label="Default select example">
                @if($product->status == 1)
                    <option value="1">C??n H??ng</option>
                    <option value="0">H???t H??ng</option>
                @else
                    <option value="0">H???t H??ng</option>
                    <option value="1">C??n H??ng</option>
                @endif
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
