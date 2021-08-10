@extends('master')
@section('content')
    <a href="{{route('create')}}" class="btn btn-success">Add New</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">MA_DL</th>
            <th scope="col">Tên đại lý</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Tên người quản lý</th>
            <th scope="col">trạng thái</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $key => $product)
        <tr>
            <th scope="row">{{$key +1}}</th>
            <td>{{$product->mdl}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->phone}}</td>
            <td>{{$product->email}}</td>
            <td>{{$product->address}}</td>
            <td>{{$product->user_manage}}</td>
            @if($product->status==1)
            <td>Con hang</td>
            @else
                <td>het hang</td>
            @endif
            <td><a href="{{route('edit',$product->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{route('delete',$product->id)}}" class="btn btn-danger" onclick="return confirm('ban co chac chan muon xoa')">Delete</a></td>
        </tr>
        @empty
        <tr><td colspan="8">No data</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
