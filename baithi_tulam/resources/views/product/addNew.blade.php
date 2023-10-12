@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-4">
        @if (count($errors->all()))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên Sản phẩm <span style="color:red">(*)</span></label>
                <input type="hidden" name="id" id="id" value="{{$row->id??''}}">
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm"
                    value="{{$row->name??''}}">
                @error('name')
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text" style="color:red">
                        {{ $message }}
                    </span>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cat" class="form-label">Danh mục sản phẩm<span style="color:red">(*)</span></label>
                <select class="form-select" name="cat" id="cat">
                    <option>-------------Danh mục sản phẩm---------------</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}" {{($cat->id==($row->category_id??''))?'selected':''}}>
                        {{$cat->name}}</option>
                    @endforeach
                </select>
                @error('cat')
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text" style="color:red">
                        {{ $message }}
                    </span>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload ảnh<span style="color:red">(*)</span></label>
                <input class="form-control" type="file" name="image" id="image">
                @error('image')
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text" style="color:red">
                        {{ $message }}
                    </span>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Giá tiền<span style="color:red">(*)</span></label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Giá sản phẩm"
                    value="{{$row->price??''}}">
                @error('price')
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text" style="color:red">
                        {{ $message }}
                    </span>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description"
                    rows="3">{{$row->description??''}}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="status" name="status" value="1"
                    {{($row->status??'')?'checked':''}}>
                <label class="form-check-label" for="status">
                    Ẩn/Hiện
                </label>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Thêm mới</button>
            </div>
        </form>
    </div>
</div>
@stop