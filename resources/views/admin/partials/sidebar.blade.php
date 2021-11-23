<div class="col-md-3 left_col">
  <div class="left_col scroll-view">

    <div class="clearfix"></div>

    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="/assets/admin/img/user_photo.png" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Добро пожаловать,</span>
        <h2>{{ Auth::user()->name }}</h2>
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
          {{-- @canany(['user.view', 'user_role.view']) --}}
          <li><a><i aria-hidden="true" class="fa fa-users"></i> Пользователи <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @can('user.create')
                <li><a href="/admin/user/add"><i class="fa fa-plus-circle"></i>Добавить пользователя</a>
                </li>
              @endcan
              @can('user.view')
                <li><a href="/admin/users">Список пользователей</a></li>
              @endcan
              @can('user_role.create')
                <li><a href="/admin/role/add"><i class="fa fa-plus-circle"></i>Добавить роль</a>
                </li>
              @endcan
              @can('user_role.view')
                <li><a href="/admin/roles">Список ролей</a></li>
              @endcan
            </ul>
          </li>
          {{-- @endcanany --}}
          {{-- @can('access.edit') --}}
          <li><a><i aria-hidden="true" class="fa fa-newspaper-o"></i> Новости <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @can('article.create')
                <li><a href="/admin/article/add"><i class="fa fa-plus-circle"></i>Добавить
                    новость</a></li>
              @endcan
              @can('article.view')
                <li><a href="/admin/articles">Список новостей</a></li>
              @endcan
            </ul>
          </li>
          {{-- <li><a><i aria-hidden="true" class="fa fa-newspaper-o"></i> Мероприятия <span --}}
          {{-- class="fa fa-chevron-down"></span></a> --}}
          {{-- <ul class="nav child_menu"> --}}
          {{-- @can('event.create') --}}
          {{-- <li><a href="/admin/event/add"><i class="fa fa-plus-circle"></i>Добавить --}}
          {{-- мероприятие</a></li> --}}
          {{-- @endcan --}}
          {{-- @can('event.view') --}}
          {{-- <li><a href="/admin/events">Список мероприятий</a></li> --}}
          {{-- @endcan --}}
          {{-- </ul> --}}
          {{-- </li> --}}
          <li><a><i aria-hidden="true" class="fa fa-picture-o"></i> Медиа <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @can('album.create')
                <li><a href="/admin/album/add"><i class="fa fa-plus-circle"></i>Добавить альбом</a>
                </li>
              @endcan
              @can('album.view')
                <li><a href="/admin/albums">Список альбомов</a></li>
              @endcan
              @can('video.create')
                <li><a href="/admin/video/add"><i class="fa fa-plus-circle"></i>Добавить
                    видео</a>
                </li>
              @endcan
              @can('video.view')
                <li><a href="/admin/videos">Список видео</a></li>
              @endcan
            </ul>
          </li>
          <li>
            <a href="/admin/menu">
              <i aria-hidden="true" class="fa fa-columns"></i> Мeню

            </a>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-columns"></i> Страницы <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @can('page.create')
                <li><a href="/admin/page/add"><i class="fa fa-plus-circle"></i>Добавить страницу</a>
                </li>
              @endcan
              @can('page.view')
                <li><a href="/admin/pages">Список страниц</a></li>
              @endcan
            </ul>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Города <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('regions.create')}}"><i class="fa fa-plus-circle"></i>Добавить город</a>
                </li>
                  <li><a href="{{route('regions.index')}}">Список городов</a></li>

            </ul>
          </li>
          <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Школы <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @can('section.create')
                <li><a href="/admin/section/add"><i class="fa fa-plus-circle"></i>Добавить школу</a>
                </li>
              @endcan
              @can('section.view')
                <li><a href="/admin/sections">Список школ</a></li>
              @endcan

              <li><a href="/admin/notifications">Настройки уведомлений </a></li>

            </ul>
          </li>

            <li><a><i aria-hidden="true" class="fa fa-graduation-cap"></i> Катки <span
                        class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('section.create')
                        <li><a href="/admin/section/add/rink"><i class="fa fa-plus-circle"></i>Добавить каток</a>
                        </li>
                    @endcan
                    @can('section.view')
                        <li><a href="/admin/sections/rink">Список катков</a></li>
                    @endcan

                    <li><a href="/admin/notifications">Настройки уведомлений </a></li>

                </ul>
            </li>

          {{-- @endcan --}}
        </ul>
      </div>
    </div>
  </div>
</div>
