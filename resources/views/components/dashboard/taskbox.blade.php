{{-- <div class="col-md-4">
    <div class="border border-danger bg-light p-1 goal-box">
        <h2 class="task-title border-bottom">{{$task->title}}</h2>
        <p class="task-text">{{$task->description}}</p>
    </div>
</div> --}}
<div class="col-md-4">
    <div class="card my-1">
        <div class="card-header p-1">
            <p class="h4 mb-0">{{$task->title}}</p>
        </div>
        <div class="card-body p-1">
            <p class="task-text mb-0">{{$task->description}}</p>
        </div>
    </div>
</div>