@extends('layouts.app')

@section('title','انشاء مشروع جديد')

@section('content')

<div class="row justify-content-center text-right">
    <div class="col-10">
        <h3 class="text-center pb-5 font-weight-bold">
                مشروع جديد
        </h3>
     <form action="/projects" method="POST" dir="rtl">
     @include('projects.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">انشاء</button>
        <a href="/projects" class="btn btn-light">الغاء</a>
    </div>
</form>

    </div>
</div>  


@endsection
    