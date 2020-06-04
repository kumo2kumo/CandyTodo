@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <nav class="panel panel-default">
        <div class="panel-heading">フォルダをまず作成してちょ</div>
        <div class="panel-body">
          <div class="text-center">
            <a href="{{ route('folders.create') }"class="btn btn-primary">フォルダ新規作成
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
@endsection