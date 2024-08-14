@csrf
<div class="form-group">
    <label for="title">عنوان المشروع</label>
    <input class="form-control @error('description') is-invalid @enderror" id="title" name="title"  type="text" value="{{$project->title}}" >
    @error('title')
    <div class="invalid-feedback">
       <small>  {{ $message }}</small>
    </div>
@enderror
</div>

<div class="form-group">
    <label for="description">تفاصيل المشروع</label>
    <!-- <textarea class="form-control" name="description" id="description"></textarea> -->
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{$project->description}}</textarea>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>