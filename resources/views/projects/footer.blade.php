<div class="card-footer " dir="rtl">
    
    <div class="d-flex ">
        
        <div class="d-flex ">
            <img src="/images/clock.svg" alt="">
            <div class="mr-2">
                {{  $project->created_at->diffForHumans()  }}
            </div>
        </div>


        <div class="d-flex ">
            <img src="/images/list-check.svg" alt="">
            <div class="mr-2">
             {{count($project->tasks)}}
             
            </div>  
        </div>
        
        <div class="d-flex    ">
            <form action="/projects/{{ $project->id }}" method="POST">
                @method('DELETE')
                @csrf
                    <input type="submit" class="btn-delete" value="" >
            </form>
        </div>
    
    </div>
</div>

{{-- <div class="card-footer" dir="ltr">
    <div class="d-flex justify-content-between">
        <!-- Trash icon on the left -->
        <div class="d-flex align-items-center">
            <form action="/projects/{{ $project->id }}" method="POST">
                @method('DELETE')
                @csrf
                <img src="/images/trash.svg" alt="Delete" style="width: 20px; height: 20px;">
            </form>
        </div>

        <!-- Other elements on the right -->
        <div class="d-flex">
            <div class="d-flex align-items-center mr-3">
                <img src="/images/clock.svg" alt="">
                <div class="mr-2">
                    {{ $project->created_at->diffForHumans() }}
                </div>
            </div>

            <div class="d-flex align-items-center">
                <img src="/images/list-check.svg" alt="">
                <div class="mr-2">
                    {{ count($project->tasks) }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
