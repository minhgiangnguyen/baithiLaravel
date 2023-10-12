@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-4">
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên Danh mục</label>
                <input type="text" class="form-control" id="catname" name="catname" placeholder="Tên danh mục">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="status" name="status" checked>
                <label class="form-check-label" for="flexCheckChecked">
                Ẩn Hiện
                </label>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Thêm mới</button>
            </div>
        </form>
    </div>
</div>
@stop