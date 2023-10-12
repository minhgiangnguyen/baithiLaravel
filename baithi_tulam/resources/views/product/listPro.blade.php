@extends('layout.main')
@section('content')
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->categories->name}}</td>
                    <td><img src="{{$product->image}}" alt="" width="200"></td>
                    <td>{{$product->price}}</td>
                    <td>{{($product->status)?'hiện':'ẩn'}}</td>
                    <td>{{$product->description}}</td>
                    <td><a href="{{route('themmoisanpham',['id' => $product->id])}}">Sửa</a><a
                            href="{{route('xoasanpham',['id' => $product->id])}}"
                            onClick="return confirm('Bạn có muốn xoá không')">Xoá</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
@stop