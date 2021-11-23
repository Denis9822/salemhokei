@extends('admin.layout')

@section('title')
	Профиль: {{ $user->name }}
@endsection

@section('content')
	<div class="right_col" role="main">
		<div>

			<div class="row">
				@if(session('status'))
					<div class="alert alert-success" role="alert">
						<strong>{{ session('status') }}</strong>
					</div>
				@endif
				<form class="form-horizontal form-label-left" role="form" method="POST" action="/admin/profile/">
					{{ csrf_field() }}
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Сменить контактные данные</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}" style="margin:0 0 20px">
									<label class="input-group-addon" for="name">ФИО:</label>
									<input autocomplete="off" type="text" value="{{auth()->user()->name}}" id="name" name="name" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								@if ($errors->has('name'))
									<div class="alert alert-danger" role="alert">
										{{ $errors->first('name') }}
									</div>
								@endif
								<div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}" style="margin:20px 0">
									<label class="input-group-addon" for="email">Email:</label>
									<input autocomplete="off" aria-autocomplete="none" value="{{auth()->user()->email}}" type="email" id="email" name="email" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								@if ($errors->has('email'))
									<div class="alert alert-danger" role="alert">
										{{ $errors->first('email') }}
									</div>
								@endif
								<input type="submit" class="btn btn-primary" value="Сохранить">
							</div>
						</div>
					</div>
				</form>
				<form class="form-horizontal form-label-left" role="form" method="POST" action="/admin/profile/">
					{{ csrf_field() }}
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Сменить пароль</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">

								<div class="input-group {{ $errors->has('old_password') ? ' has-error' : '' }}" style="margin:0 0 20px">
									<label class="input-group-addon" for="old_password">Старый пароль:</label>
									<input autocomplete="off" aria-autocomplete="none" type="password" id="old_password" name="old_password" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								@if ($errors->has('old_password'))
									<div class="alert alert-danger" role="alert">
										{{ $errors->first('old_password') }}
									</div>
								@endif

								<div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}" style="margin:0 0 20px">
									<label class="input-group-addon" for="password">Новый пароль:</label>
									<input autocomplete="off" aria-autocomplete="none" type="password" id="password" name="password" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								@if ($errors->has('password'))
									<div class="alert alert-danger" role="alert">
										<?php echo $errors->first('password');?>
									</div>
								@endif

								<div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}" style="margin:20px 0">
									<label class="input-group-addon" for="password_confirmation">Подтвердите пароль:</label>
									<input autocomplete="off" aria-autocomplete="none" type="password" id="password_confirmation" name="password_confirmation" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>

								<input type="submit" class="btn btn-primary" value="Сохранить">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
