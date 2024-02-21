<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Đóng kết nối
$conn->close();
?>
@extends('adminlte::page')

@section('title', 'Admin | Create Product')

@section('content_header')
    <h1>Create Product </h1> 

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm sản phẩm </h3>
        </div>
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type='text' name="name" class="form-control" id="name" placeholder="Enter name" value=" {{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="Code">Code</label>
                    <input type='text' name="code" class="form-control" id="code" placeholder="code">
                     </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type='text' name="price" class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type='text' name="quantity" class="form-control" id="quantity" placeholder="quantity">
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop