<form class="form-horizontal" method="post" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Student[name]" class="form-control" id="name"
                   value="{{old('Student')['name']?old('Student')['name']:$teacher->name}}"
                   placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.name')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name='Student[age]' class="form-control" id="age"
                   value="{{old('Student')['age']?old('Student')['age']:$teacher->age}}"
                   placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            @foreach($teacher->sex() as $key=>$val)
                <label class="radio-inline">
                    <input type="radio" name='Student[sex]' {{isset($teacher->sex)&&$teacher->sex==$key?' checked=checked':''}}  value="{{$key}}"
                           style="margin-left:20px;">{{$val}}
                </label>
            @endforeach

        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.sex')}}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>