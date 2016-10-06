@extends('layouts.app')

<!-- change title -->
@section('title')
Trang chủ
@endsection

<!-- change content -->
@section('content')
<div class="container-fluid">

    <!-- not login -->
    @if (Auth::guest())
    <h3> Các khóa học </h3>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="{{ url('images/course.png') }}" />
                <div class="caption" align="center">
                    <h4> {{ $course -> name }} </h4>
                    <p>
                    Mã học phần: {{ $course -> code }} <br/> Thời gian mở: {{ $course -> created_at }}
                    </p>
                    <a href="" class="btn btn-info"> Xem thêm </a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    @endif

</div>
@endsection
