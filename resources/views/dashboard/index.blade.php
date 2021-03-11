@extends('layouts.hero')
@section('content')
<div class="">
    <div class="mb-3">
        <div class="row justify-content-between">
            <p class="h4 mb-0 text-danger col">Tasks</p>
            <div class="toggle-switch col-4 font-weight-bold text-primary">
                <span>open</span>
                <span class="ml-1">close</span>
            </div>
        </div>
        <div style="overflow-y: scroll; overflow-x: hidden; max-height: 26rem">
            <div class="row">
                @each('components.dashboard.taskbox', $tasks, 'task')
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="row justify-content-between">
            <p class="h4 mb-0 text-success col">Goals</p>
            <div class="toggle-switch col-4 font-weight-bold text-primary">
                <span>open</span>
                <span class="ml-1">close</span>
            </div>
        </div>
        <div style="overflow-y: scroll; overflow-x: hidden; max-height: 26rem">
            <div class="row">
                @each('components.dashboard.goalbox', $goals, 'goal')
            </div>
        </div>
    </div>

    <div class="mb-3">
        <p class="h4 mb-0 text-info">Reasons</p>
        <div style="overflow-y: scroll; overflow-x: hidden; max-height: 26rem">
            <div class="row">
                @each('components.dashboard.reasonbox', $reasons, 'reason')
            </div>
        </div>
    </div>
    
</div>

<script>
    'use strict';
    let headers = document.getElementsByClassName('card-header');
    var len = headers.length;
    for (let i = 0; i < len; i++) {
        if (headers[i].nextElementSibling === null) 
            continue;
        headers[i].addEventListener('click', function () {
            this.nextElementSibling.toggleAttribute('hidden');
        });
    }

    let toggleSwitches = document.getElementsByClassName('toggle-switch');
    var len = toggleSwitches.length;
    for (let i = 0; i < len; i++) {
        toggleSwitches[i].firstElementChild.addEventListener('click', function () {
            Array.prototype.forEach.call(
                toggleSwitches[i].parentElement.nextElementSibling.getElementsByClassName('card-body'),
                function (cBody) {
                    cBody.removeAttribute('hidden');
                }
            );
        });
        toggleSwitches[i].lastElementChild.addEventListener('click', function () {
            Array.prototype.forEach.call(
                toggleSwitches[i].parentElement.nextElementSibling.getElementsByClassName('card-body'),
                function (cBody) {
                    cBody.setAttribute('hidden', 'hidden');
                }
            );
        });
    }
</script>

@endsection