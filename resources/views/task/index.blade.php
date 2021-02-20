@extends('layouts.hero')

@section('content')
<div class="">
    <div class="mb-3">
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-4">
                <div class="border border-danger bg-light p-1 goal-box">
                    <h2 class="goal-title border-bottom">Bootstrap4でレイアウトを構成</h2>
                    <p class="goal-text">Bootstrapをつかって大体のイメージをつかむためにレイアウトを構築していく。
                        まずは、グリッドシステムでタスク表示の構成を考える。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">たいとる</th>
                    <th scope="row">内容</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($tasks))
                @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td><a href="/task/edit?id={{$task->id}}">詳細</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>   
        @else                         
            レコードなし
        @endif
    </div>
</div>
@endsection