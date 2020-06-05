@extends('layout')

@section('styles')
<title>編集編集</title>
@include('share.flatpickr.styles')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset3 col-md-6">
      <nav class="panel panel-default">
        <div class="panel-heading">フォルダを追加しゅる</div>
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

          <form method="POST" action="{{ route('tasks.edit', ['folder'=> $task->folder_id, 'task' =>$task->id]) }}">
            @csrf
            <div class="form-group">
              <label for="title">タスク名</label>
              <input type="text" class="form-control" id="title" name='title' value="{{ old('title') ?? $task->title }}">
            </div>
            <div class="form-group">
              <label for="status">状態</label>
              <select name="status" id="status" class="form-control">
                @foreach(\App\Task::STATUS as $key=> $val)
                <option value="{{ $key }}" {{ $key == old('status' , $task->status) ? 'selected': '' }}>
                  {{ $val['label'] }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="due_date">期限</label>
              <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') ?? $task->due_date }}">
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