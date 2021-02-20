{{-- <div class="col-4">
    <div class="border border-danger bg-light p-1 goal-box">
        <h2 class="goal-title border-bottom">{{$goal->title}}</h2>
        <p class="goal-text">{{$goal->comment}}</p>
    </div>
</div> --}}
<div class="col-md-4">
    <div class="card my-1">
        <div class="card-header p-1">
            <h3 class="mb-0">{{$goal->title}}</h3>
        </div>
        <div class="card-body p-1">
            <p class="mb-0">{{$goal->comment}}</p>
        </div>
    </div>
</div>