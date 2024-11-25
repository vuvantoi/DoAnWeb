<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>

    <!-- header -->
    @include('parts.header')
    <!-- slider -->

<section class="slider">
    <div class="slider-items">
        <div class="slider-item">
            <img src="{{asset('fontend/asset/images/slider1.jpg')}}" alt="">
        </div>
        <div class="slider-item">
            <img src="{{asset('fontend/asset/images/slider2.png')}}" alt="">
        </div>
        <div class="slider-item">
            <img src="{{asset('fontend/asset/images/slider4.jpg')}}" alt="">
        </div>
        <div class="slider-item">
            <img src="{{asset('fontend/asset/images/slider3.png')}}" alt="">
        </div>
    </div>
    <div class="slider-arrow">
        <i class="ri-arrow-right-line"></i>
        <i class="ri-arrow-left-line"></i>
    </div>
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

 <!-- footer -->
@include('parts.footer')
</body>
</html>