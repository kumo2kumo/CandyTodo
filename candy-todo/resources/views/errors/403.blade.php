@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="text-center">
        <p>お探しのページの権限がないよ☆</p>
        <a href="{{ route('home') }}" class="btn">
          ホームへ戻る☆
        </a>
      </div>
    </div>
  </div>
</div>
@endsection