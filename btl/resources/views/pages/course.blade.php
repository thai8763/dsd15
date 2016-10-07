@extends('layouts.app')

@section('title')
{{ $name }}
@endsection

<!-- hien thi chi tiet khoa hoc -->
@section('content')
<div class="container-fluid">

    <!-- trang truy cập -->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"> Khóa học </a></li>
        <li><a href=""> {{ $name }} </a></li>
    </ol>

    <!-- noi dung -->
    <div class="row">
        <div class="col-sm-3">
            <div class="list-group">
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-hand-right"> </span> &nbsp Bài giảng của giáo viên </a>
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-book"> </span> &nbsp Tài liệu của tôi </a>
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-share-alt"> </span> &nbsp Tài liệu được chia sẻ </a>
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-trash"> </span> &nbsp Thùng rác </a>
            </div>
        </div>
        <div class="col-sm-9">
            <a href="" class="btn btn-info"> Tạo mới </a>
            <hr/>
            <div class="list-group">
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-folder-open"> </span> &nbsp Bài giảng </a>
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-file"> </span> &nbsp Slide 01 </a>
                <a href="" class="list-group-item"> <span class="glyphicon glyphicon-film"> </span> &nbsp Bài giảng.mp4 </a>
                <a href="" class="list-group-item"> Thùng rác </a>
            </div>
        </div>
    </div>
</div>
@endsection