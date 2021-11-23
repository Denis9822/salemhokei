<div class="col-md-3 left_col">
  <div class="left_col scroll-view">

    <div class="clearfix"></div>

    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="/assets/admin/img/user_photo.png" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Добро пожаловать,</span>
        <h2><?php echo e(Auth::user()->name); ?></h2>
      </div>
    </div>

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Главная <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/admin/profile/">Профиль</a></li>
            </ul>
          </li>
          
          <li><a><i aria-hidden="true" class="fa fa-users"></i> Пользователи <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.create')): ?>
                <li><a href="/admin/user/add"><i class="fa fa-plus-circle"></i>Добавить пользователя</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.view')): ?>
                <li><a href="/admin/users">Список пользователей</a></li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_role.create')): ?>
                <li><a href="/admin/role/add"><i class="fa fa-plus-circle"></i>Добавить роль</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_role.view')): ?>
                <li><a href="/admin/roles">Список ролей</a></li>
              <?php endif; ?>
            </ul>
          </li>
          
          
          <li><a><i aria-hidden="true" class="fa fa-newspaper-o"></i> Новости <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article.create')): ?>
                <li><a href="/admin/article/add"><i class="fa fa-plus-circle"></i>Добавить
                    новость</a></li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article.view')): ?>
                <li><a href="/admin/articles">Список новостей</a></li>
              <?php endif; ?>
            </ul>
          </li>
          
          
          
          
          
          
          
          
          
          
          
          
          <li><a><i aria-hidden="true" class="fa fa-picture-o"></i> Медиа <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('album.create')): ?>
                <li><a href="/admin/album/add"><i class="fa fa-plus-circle"></i>Добавить альбом</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('album.view')): ?>
                <li><a href="/admin/albums">Список альбомов</a></li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('video.create')): ?>
                <li><a href="/admin/video/add"><i class="fa fa-plus-circle"></i>Добавить
                    видео</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('video.view')): ?>
                <li><a href="/admin/videos">Список видео</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li>
            <a href="/admin/menu">
              <i aria-hidden="true" class="fa fa-columns"></i> Мeню

            </a>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-columns"></i> Страницы <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page.create')): ?>
                <li><a href="/admin/page/add"><i class="fa fa-plus-circle"></i>Добавить страницу</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page.view')): ?>
                <li><a href="/admin/pages">Список страниц</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Города <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo e(route('regions.create')); ?>"><i class="fa fa-plus-circle"></i>Добавить город</a>
                </li>
                  <li><a href="<?php echo e(route('regions.index')); ?>">Список городов</a></li>

            </ul>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Школы <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('section.create')): ?>
                <li><a href="/admin/section/add"><i class="fa fa-plus-circle"></i>Добавить школу</a>
                </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('section.view')): ?>
                <li><a href="/admin/sections">Список школ</a></li>
              <?php endif; ?>

              <li><a href="/admin/notifications">Настройки уведомлений </a></li>

            </ul>
          </li>

            <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Катки <span
                        class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('section.create')): ?>
                        <li><a href="/admin/section/add/rink"><i class="fa fa-plus-circle"></i>Добавить каток</a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('section.view')): ?>
                        <li><a href="/admin/sections/rink">Список катков</a></li>
                    <?php endif; ?>

                    <li><a href="/admin/notifications">Настройки уведомлений </a></li>

                </ul>
            </li>

          
        </ul>
      </div>
    </div>
  </div>
</div>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>