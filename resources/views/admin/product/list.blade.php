@extends('admin.main')
@section('content')
<div class="admin-content-main-title">
                    <h1>Danh sách sản phẩm  </h1>
                </div>
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-product-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá bán</th>
                                    <th>Giảm giá</th>
                                    <th>Ngày đăng</th>
                                    <th>Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img style="width: 70px;" src="{{asset($product -> image)}}" alt=""></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{number_format($product->price_nomal)}}</td>
                                        <td>{{number_format($product->price_sale)}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            <a href="/admin/product/edit/{{$product->id}}" class="edit-class">Sửa</a>
                                            |
                                            <a onclick="removeRow(product_id=<?php echo $product->id?>,url='/admin/product/delete')" class="delete-class" href="#">Xóa</a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


@endsection
