@extends('layouts.hero')
@section('content')
<div class="">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <form action="/task/edit" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="taskTitle">タイトル</label>
                <input type="text" name="title" id="taskTitle" 
                    class="form-control" value="{{$task->title}}"
                    required>
                @error('title')
                    <small class="form-text text-danger"> {{ $message }}</small>
                @enderror
                <div class="valid-feedback">ok.</div>
                <div class="invalid-feedback">タイトルは必須項目です。</div>
            </div>
            <div class="form-group">
                <label for="taskDescription">内容</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{$task->description}}</textarea>
                <div class="valid-feedback">ok.</div>
                <div class="invalid-feedback">内容は必須項目です。</div>
                @error('description')
                    <small class="form-text text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{$task->id}}">
            <input type="hidden" name="user_id" value="{{$task->user_id}}">
            <button type="submit" class="btn btn-info">修正する</button>
        </form>
        <form action="/task/destroy" method="post" class="mt-3">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">
            <button type="submit" class="btn btn-danger">削除する</button>
        </form>
    </div>
</div>
@endsection