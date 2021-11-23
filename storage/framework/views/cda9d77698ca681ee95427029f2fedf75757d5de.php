<?php $__env->startSection('title'); ?>
	Профиль: <?php echo e($user->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="right_col" role="main">
		<div>

			<div class="row">
				<?php if(session('status')): ?>
					<div class="alert alert-success" role="alert">
						<strong><?php echo e(session('status')); ?></strong>
					</div>
				<?php endif; ?>
				<form class="form-horizontal form-label-left" role="form" method="POST" action="/admin/profile/">
					<?php echo e(csrf_field()); ?>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Сменить контактные данные</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="input-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>" style="margin:0 0 20px">
									<label class="input-group-addon" for="name">ФИО:</label>
									<input autocomplete="off" type="text" value="<?php echo e(auth()->user()->name); ?>" id="name" name="name" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								<?php if($errors->has('name')): ?>
									<div class="alert alert-danger" role="alert">
										<?php echo e($errors->first('name')); ?>

									</div>
								<?php endif; ?>
								<div class="input-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>" style="margin:20px 0">
									<label class="input-group-addon" for="email">Email:</label>
									<input autocomplete="off" aria-autocomplete="none" value="<?php echo e(auth()->user()->email); ?>" type="email" id="email" name="email" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								<?php if($errors->has('email')): ?>
									<div class="alert alert-danger" role="alert">
										<?php echo e($errors->first('email')); ?>

									</div>
								<?php endif; ?>
								<input type="submit" class="btn btn-primary" value="Сохранить">
							</div>
						</div>
					</div>
				</form>
				<form class="form-horizontal form-label-left" role="form" method="POST" action="/admin/profile/">
					<?php echo e(csrf_field()); ?>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Сменить пароль</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">

								<div class="input-group <?php echo e($errors->has('old_password') ? ' has-error' : ''); ?>" style="margin:0 0 20px">
									<label class="input-group-addon" for="old_password">Старый пароль:</label>
									<input autocomplete="off" aria-autocomplete="none" type="password" id="old_password" name="old_password" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								<?php if($errors->has('old_password')): ?>
									<div class="alert alert-danger" role="alert">
										<?php echo e($errors->first('old_password')); ?>

									</div>
								<?php endif; ?>

								<div class="input-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>" style="margin:0 0 20px">
									<label class="input-group-addon" for="password">Новый пароль:</label>
									<input autocomplete="off" aria-autocomplete="none" type="password" id="password" name="password" class="form-control" max-length="200" lang="ru" speech="" x-webkit-speech="">
								</div>
								<?php if($errors->has('password')): ?>
									<div class="alert alert-danger" role="alert">
										<?php echo $errors->first('password');?>
									</div>
								<?php endif; ?>

								<div class="input-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>" style="margin:20px 0">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>