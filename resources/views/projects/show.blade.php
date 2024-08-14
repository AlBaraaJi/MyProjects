@extends('layouts.app')
@section('content')


<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
<div class="h6 text-dark">
    <a href="/projects"> {{$project->title}} </a>
</div>
<div class="form-group">
    <h3>Completed Tasks: {{ $project->tasks->where('done', true)->count() }}</h3>
  </div>
<div>
    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary px-4" role="button"]>تعديل المشروع</a>
</div>
</header>

<section class="row text-right" dir="rtl">
<div class="col-lg-4">
    <!-- project details -->
    
    <div class="card text-right ">
                <div class="card-body ">
                    <div class="status">
                        @switch($project->status)
                            @case(1)
                                <span class="text-success">مكتمل</span>
                                @break
                            @case(2)
                                <span class="text-danger">ملغي</span>
                                @break
                            @default
                                <span class="text-warning">قيد الانجاز</span>
                        @endswitch  
                        <h5 class="font-weight-bold card-title">
                            <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                        </h5>
                        <div class="card-text mt-4">
                            {{ $project->description }}
                        </div>
                        @include('projects.footer')
                    </div>
                </div>
            </div>

<div class="card mt-3">
    <div class="card-body">
        <form action="/projects/{{$project->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="status" class="font-weight-bold">تحديث حالة المشروع</label>
                <select name="status" id="status" class="form-control custom-select" onchange="this.form.submit()">
                    <option value="0" {{($project->status == 0) ? 'selected' : ""}}>قيد الانجاز</option>
                    <option value="1" {{($project->status == 1) ? 'selected' : ""}}>مكتمل</option>
                    <option value="2" {{($project->status == 2) ? 'selected' : ""}}>ملغي</option>
                </select>
            </div>
        </form>
    </div>
</div>

</div>

<div class="col-lg-8">
<!-- tasks -->

@foreach($project->tasks as $task)
<div class="card flex-row w-100 justify-content-between">
    <div  class="{{$task->done ? 'checked' : '' }}">
        {{$task->body}}
    </div>
    <div class="mr-auto">
    <form action="/projects/{{$project->id}}/tasks/{{$task->id}}" method="POST" >
        @csrf

        @method("PATCH")
        <div class="form-check mr-auto">
        <input type="checkbox" name="done" class="form-check-input  " onchange="this.form.submit()" {{ $task->done ? 'checked' : '' }}>
        </div>
    </form>
    <div class="d-flex    ">
        <form action="/projects/{{ $task->project_id }}/tasks/{{$task->id}}" method="POST">
            @method('DELETE')
            @csrf
                <input type="submit" class="btn-delete" value="" > 
        </form>
    </div>
</div>
</div>
@endforeach
<form action="/projects/{{$project->id}}/tasks" method="POST">
    @csrf
    <input type="text" name="body" placeholder="اضف مهمة جديدة" class="form-control p-2 ml-2">
    <button class="btn btn-primary" type="submit">اضافة</button>
</form>
</div>

</section>



@endsection