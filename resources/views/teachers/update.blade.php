@extends('common.layouts')

@section('content')
    @include('common.validator')
    <div class="panel panel-default">
        <div class="panel-heading">修改学生</div>
        <div class="panel-body">
            @include('teachers.form')
        </div>
    </div>
@stop