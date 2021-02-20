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
        <form action="/task/create" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="taskTitle">タイトル</label>
                <input type="text" name="title" id="taskTitle" 
                    class="form-control" value="{{old('title')}}"
                    required>
                @error('title')
                    <small class="form-text text-danger"> {{ $message }}</small>
                @enderror
                <div class="valid-feedback">ok.</div>
                <div class="invalid-feedback">タイトルは必須項目です。</div>
            </div>
            <div class="form-group">
                <label for="taskDescription">内容</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{old('description')}}</textarea>
                <div class="valid-feedback">ok.</div>
                <div class="invalid-feedback">内容は必須項目です。</div>
                @error('description')
                    <small class="form-text text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <input type="hidden" name="user_id" value="1">
            <button type="submit" class="btn btn-primary">追加する</button>
        </form>
    </div>
</div>
@endsection