@extends('common.layouts')

@section('content')
    @include('common.message')
    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>

            @foreach($list as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        {{$student->sex($student->sex)}}
                    </td>
                    <td>{{$student->created_at}}</td>
                    <td>
                        <a href="{{url('teacher/update',['id'=>$student->id])}}">修改</a>
                        <a href="{{url('teacher/delete',['id'=>$student->id])}}" onclick="if(confirm('确认要删除吗?')==false) return false">删除</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="pull-right">
        {{$list->links()}};
    </div>

@endsection
