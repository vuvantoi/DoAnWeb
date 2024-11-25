@extends('admin.main')
@section('content')
<div class="admin-content-main-title">
    <h1>Thêm sản phẩm</h1>
</div>
<div class="admin-content-main-content">

    <input type="hidden" name="upload" value="{{ route('upload') }}">
    <input type="hidden" name="uploads" value="{{ route('uploads') }}">

<form action="/admin/product/add" method="post">
    <div class="admin-content-main-content-product-add">
        
            <div class="admin-content-main-content-left">
                <div class="admin-content-main-content-two-input">
                    <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm">
                    <input type="text" value="{{old('material')}}" name="material" placeholder="Chất liệu">
                </div>
                <div class="admin-content-main-content-two-input">
                    <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán">
                    <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm">
                </div>
                <div class="dacdiemnoibat">Đặc điểm nổi bật</div>
                <textarea value="{{old('description')}}" id="input1" name="description"></textarea>
                <div class="dacdiemnoibat">Mô tả sản phẩm</div>
                <textarea value="{{old('content')}}" id="input2" name="content"></textarea>
                <button type="submit" class="main-btn">Thêm sản phẩm</button>
            </div>
            <div class="admin-content-main-content-right">
                <div class="admin-content-main-content-right-image">
                    <label for="file">Ảnh đại diện</label>
                    <input id="file" type="file">
                    <input type="hidden" name="image" id="input-file-img-hiden">
                    <div class="image-show" id="input-file-img">

                    </div>
                </div>
                <div class="admin-content-main-content-right-images">
                    <label for="files">Ảnh sản phẩm</label>
                    <input id="files" type="file" multiple>
                    <div class="images-show" id="input-file-imgs">
                        
                    </div>
                </div>
            </div>
        
    </div>
    @csrf
    </form>
</div>
@endsection
