@extends('layout')

@section('styles')
<title>todoAPPPPP</title>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <nav class="panel panel-default">
        <div class="panel-heading">フォルダ一覧</div>
        <div class="panel-body">
          <a href="{{ route('folders.create')}}" class="btn btn-default btn-block">フォルダを追加する</a>
        </div>
        <div class="list-group">
          @foreach($folders as $folder)
          <a href="{{ route('tasks.index',['id'=>$folder->id]) }}" class="list-group-item {{ $current_folder_id === $folder->id ? 'active': '' }}">
            {{ $folder->title }}
          </a>
          @endforeach
        </div>
      </nav>
    </div>

    <div class="col-md-8">
      <nav class="panel panel-default">
        <div class="panel-heading">タスク</div>
        <div class="panel-body">
          <div class="text-right">
            <a href="{{ route('tasks.create', ['id' => $current_folder_id]) }}" class="btn btn-default btn-block">タスクを追加しゅる</a>
          </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>タイトル</th>
              <th>状態</th>
              <th>期限</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($tasks as $task)
            <tr>
              <td>{{ $task->title}}</td>
              <td><span class="label {{ $task->status_class }}">{{ $task->status_label }}</span></td>
              <td>{{ $task->formatted_due_date }}</td>
              <td><a href="{{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }}">編集</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </nav>
    </div>
  </div>
</div>
@endsection