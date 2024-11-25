@extends('main')
@section('content')
<section class="cart-section p-to-top">
    <form action="/cart/send" method="post">
    <div class="container">
        <div class="row-grid">
            <p class="heading-text">Giỏ hàng</p>
        </div>
        <div class="row-grid row-grid-content">
            <div class="cart-section-left">
                <h2 class="main-h2">Chi tiết đơn hàng</h2>
                <div class="cart-section-left-detail">
                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php
                                    $total=0;

                                @endphp

                            @foreach ($products as $product)
                                @php
                                    $price = $product ->price_sale*Session::get('cart')[$product->id];
                                    $total+=$price;
                                    @endphp
                                <tr>
                                    <td><img style="width: 70px;" src="{{asset($product ->image)}}" alt=""></td>
                                    <td>
                                        <div class="product-detail-right-infor">
                                            <h1>{{$product ->name}}</h1>
                                            <div class="product-item-price">
                                                <p>{{number_format($product ->price_sale)}}<sup>đ</sup><span>{{number_format($product ->price_nomal)}}<sup>đ</sup></span></p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-quantity-input">
                                            <i class="ri-subtract-line"></i>
                                            <input onkeydown="return false" class="quantity-input" name="product_id[{{$product->id}}]" type="number" value="{{Session::get('cart')[$product->id]}}">
                                            <i class="ri-add-line"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{number_format($price)}}<sup>đ</sup></p>
                                    </td>
                                    <td><a href="/cart/delete/{{$product->id}}">X</a></td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td style="font-weight:bold" colspan="2">Tổng tiền</td>
                                    <td style="font-weight:bold; text-align:center">{{number_format($total)}}<sup>đ</sup></td>
                                    <td></td>
                                </tr>
                            
                        </tbody>
                    </table>
                    <button formaction="/cart/update" class="main-btn">Cập nhật giỏ hàng</button>
                    <a href="/">>>Tiếp tục mua hàng</a>
                </div>
            </div>
            <div class="cart-section-right">
                <h2 class="main-h2">Thông tin giao hàng</h2>
                <div class="cart-section-right-input-name-phone">
                    <input type="text" placeholder="Tên" name="name">
                    <input type="text" placeholder="Điện thoại" name="phone">
                </div>
                <div class="cart-section-right-input-email">
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <!-- <div class="cart-section-right-select">
                    <select name="" id="">
                        <option value="">Tỉnh/TP</option>
                    </select>
                    <select name="" id="">
                        <option value="">Quận/Huyện</option>
                    </select>
                    <select name="" id="">
                        <option value="">Phường/Xã</option>
                    </select>
                </div> -->
                <div class="cart-section-right-input-address">
                    <input type="text" placeholder="Địa chỉ" name="address">
                </div>
                <div class="cart-section-right-input-note">
                    <input type="text" placeholder="Ghi chú" name="note">
                </div>
                <button class="main-btn">Gửi đơn hàng</button>
            </div>
        </div>
    </div>
    @csrf
    </form>
 </section>
 <!-- hot_product -->
<section class="hot-products">
    <div class="container">
        <div class="row-grid">
            <p class="heading-text">Sản phẩm</p>
        </div>
        <div class="row-grid row-grid-hot-products">
            @foreach ($products as $product)
                <div class="hot-product-item">
                    <a href="/product/{{$product -> id}}"><img src="{{asset($product -> image)}}" alt=""></a>
                    <p><a href="/product/{{$product -> id}}">{{$product -> name}}</a></p>
                    <span>{{$product -> material}}</span>
                    <div class="product-item-price">
                        <p>{{number_format($product -> price_sale)}}<sup>đ</sup> <span>{{number_format($product -> price_nomal)}}<sup>đ</sup></span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
