@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col col-md-offset3 col-md-6">
			<nav class="panel panel-default">
				<div class="panel-heading">パスワード再発行しゅる</div>
				<div class="panel-body">
					@if(session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					<form method="POST" action="{{ route('password.email') }}">
						@csrf
						<div class="form-group">
							<label for="title">メールアドレス</label>
							<input type="text" class="form-control" id="email" name="email">
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