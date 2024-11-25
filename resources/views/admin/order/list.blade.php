@extends('admin.main')
@section('content')
<div class="admin-content-main-title">
                    <h1>Danh sách đơn hàng</h1>
                </div>
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-oder-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Phone</th>
                                    <th>Mail</th>
                                    <th>Địa chỉ</th>
                                    <th>Ghi chú</th>
                                    <th>Chi tiết</th>
                                    <th>Ngày</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order ->id}}</td>
                                        <td>{{$order ->name}}</td>
                                        <td>{{$order ->phone}}</td>
                                        <td>{{$order ->email}}</td>
                                        <td>{{$order ->address}}</td>
                                        <td>{{$order ->note}}</td>
                                        <td><a href="/admin/order/detail/{{$order ->order_detail}}" class="edit-class">Xem</a></td>
                                        <td>{{$order ->created_at}}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection