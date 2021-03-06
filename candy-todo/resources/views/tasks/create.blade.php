@extends('layout')
@section('styles')
@include('share.flatpickr.styles')
<title>new Task</title>
@endsection

@section('content')
<div class="container">
  <div class="row ">
    <div class="col col-md-offset3 col-md-6 ">
      <nav class="panel panel-default mt-3">
        <div class="panel-heading">タスクを追加しゅる</div>
        <div class="panel-body">
          <!-- バリデーションエラー表示 -->
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $message)
              <li>{{ $message }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form method="POST" action="{{ route('tasks.create',['folder' => $folder_id]) }}">
            @csrf
            <div class="form-group">
              <label for="title">タスク名</label>
              <input type="text" class="form-control" id="title" name='title' value="{{ old('title') }}">
            </div>
            <div class="form-group">
              <label for="due_date">期限</label>
              <input type="text" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}">
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">送信</button>
            </div>
          </form>
        </div>
      </nav>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@include('share.flatpickr.scripts')
@endsection