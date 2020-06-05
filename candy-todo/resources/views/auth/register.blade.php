@extends('layout')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="panel">
        <div class="panel-header">会員登録</div>

        <div class="panel-body">
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors as $error)
            <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
              <label for="name">ユーザー名</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
            </div>
            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form-group">
              <label for="password">パスワード</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="password-confirm">パスワード（確認）</label>
              <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">送信</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection