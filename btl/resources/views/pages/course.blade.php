@extends('layouts.app')

@section('title')
    {{ $nameCourse }}
@endsection

<!-- hien thi chi tiet khoa hoc -->
@section('content')
<div class="container-fluid">

<!-- thông tin khóa học -->
<div class="row">
    <div class="col-xs-2">

    </div>

    <div class="col-xs-10">
        <ol class="breadcrumb">
            <li> <a href="{{url('/')}}"> Khóa học </a> </li>
            <li> {{ $nameCourse }} </li>
        </ol>
    </div>
</div>

<!-- hiển thị nội dung -->
<div class="row">
    <!-- danh muc lua chon -->
    <div class="col-sm-2">
        <div class="list-group">
            <a href="{{ url('/course/'. $courseID .'/my-document/folder/0') }}" class="list-group-item active">
                <span class="glyphicon glyphicon-folder-open"> </span> &nbsp Tài liệu của tôi
            </a>
            <a href="{{ url('/course/'. $courseID .'/shared-document') }}" class="list-group-item"> <span class="glyphicon glyphicon-share"> </span> &nbsp Được chia sẻ với tôi </a>
        </div>
    </div>

    <!-- button dieu khien -->
    <div class="col-sm-10">
        <!-- tạo mới -->
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tạo mới <span class="caret"> </span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="" data-toggle="modal" data-target="#myNewFolder">
                    <span class="glyphicon glyphicon-folder-open"> </span> &nbsp Thư mục mới </a>
                </li>
                <li role="separator" class="divider"> </li>
                <li>
                    <a href="" data-toggle="modal" data-target="#myNewFile">
                    <span class="glyphicon glyphicon-file"> </span> &nbsp Tải tệp lên </a>
                </li>
            </ul>
        </div>

        @if(count($folders) <= 0 && count($files) <= 0)
            <hr/>
            <h3 align="center"> Thư mục trống  </h3>
            <h3 align="center"> Nhấn tạo mới để tải tệp hoặc tạo thư mục mới </h3>
        @else
        <table class="table">
            <thead>
                <th> Name </th>
                <th> Owner </th>
                <th> Update at </th>
                <th> Action </th>
            </thead>
            <tbody>

                <!-- hien thi danh sach thu muc -->
                @foreach($folders as $folder)
                <tr>
                    <td>
                        <span class="glyphicon glyphicon-folder-open"> </span> &nbsp
                        <a href="{{ url('/course/'. $courseID .'/my-document/folder/' . $folder -> folder_id) }}"> {{ $folder -> folder_name }} </a>
                    </td>
                    <td>
                        @if ($folder -> user_name == Auth::user() -> name)
                            tôi
                        @else
                            {{ $folder -> user_name }}
                        @endif
                    </td>
                    <td> {{ $folder -> folder_update }} </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li> <a href="" data-toggle="modal" data-target="#myComment"> <span class="glyphicon glyphicon-comment"> </span> &nbsp Xem chú thích </a> </li>
                                <li role="separator" class="divider"> </li>
                                <li> <a href="" data-toggle="modal" data-target="#myShare"> <span class="glyphicon glyphicon-share-alt"> </span> &nbsp Chia sẻ </a> </li>
                                <li role="separator" class="divider"> </li>
                                <li> <a href="" data-toggle="modal" data-target="#myDelete"> <span class="glyphicon glyphicon-trash"> </span> &nbsp Xóa </a> </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach

                <!-- hien thi danh sach file -->
                @foreach($files as $file)
                <tr>
                    <td>
                        <span class="glyphicon glyphicon-film"> </span> &nbsp
                        <a href="" id="{{ $file -> file_url }}" data-toggle="modal" data-target="#myShowFile" onclick="showFile(this)"> {{ $file -> file_name }} </a>
                    </td>
                    <td>
                        @if ($file -> user_name == Auth::user() -> name)
                            tôi
                        @else
                            {{ $file -> user_name }}
                        @endif
                    </td>
                    <td> {{ $file -> file_update }} </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li> <a href="" data-toggle="modal" data-target="#myComment"> <span class="glyphicon glyphicon-comment"> </span> &nbsp Xem chú thích </a> </li>
                                <li role="separator" class="divider"> </li>
                                <li> <a href="" data-toggle="modal" data-target="#myShare"> <span class="glyphicon glyphicon-share-alt"> </span> &nbsp Chia sẻ </a> </li>
                                <li role="separator" class="divider"> </li>
                                <li> <a href="" data-toggle="modal" data-target="#myDelete"> <span class="glyphicon glyphicon-trash"> </span> &nbsp Xóa </a> </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            @endif
        </div>

    </div>

    @include('include.modal')

</div>
@endsection