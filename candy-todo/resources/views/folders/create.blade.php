@extends('layout')
@section('styles')
<title>new FOLDER</title>
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

          <form method="POST" action="{{ route('folders.create') }}">
            @csrf
            <div class="form-group">
              <label for="title">フォルダ名</label>
              <input type="text" class="form-control" id="title" name='title' value="{{ old('title') }}">
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