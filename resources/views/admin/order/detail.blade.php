@extends('admin.main')
@section('content')
<div class="admin-content-main-title">
                <h1>Chi tiết đơn hàng</h1>
                </div>
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-oder-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total=0;
                                @endphp
                                @foreach ($products as $product)
                                @php
                                    $price = $product->price_sale * $order_detail[$product -> id];
                                    $total+=$price
                                    @endphp
                                    <tr>
                                        <td>{{$product -> id}}</td>
                                        <td><img style="width: 70px;" src="{{$product -> image}}" alt=""></td>
                                        <td>{{$product -> name}}</td>
                                        <td>{{number_format($product -> price_sale)}}</td>
                                        <td>{{$order_detail[$product -> id]}}</td>
                                        <td>{{number_format($price)}}</td>
                                    
                                @endforeach
                                    </tr>
                                    
                                        <td style="font-weight: 700;" colspan="5">Tổng tiền</td>
                                        <td style="font-weight: 700;">{{number_format($total)}}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection