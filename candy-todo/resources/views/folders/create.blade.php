<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <title>todoAPPPP</title>
</head>

<body>
  <header>
    <nav class="my-navbar">
      <a class="my-navbar-brand">todoAPPPPP</a>
    </nav>
  </header>

  <main>
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
  </main>

</body>

</html>