<?php $__env->startSection("title", "Все страницы"); ?>

<?php $__env->startSection("content"); ?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Страницы</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form action="/admin/pages" method="get">
            <div class="input-group">
              <input type="text" name="term" class="form-control" placeholder="Поиск" value="<?php echo e($term); ?>">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Найти</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <?php if(session("status")): ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-success" role="alert">
          <strong><?php echo e(session("status")); ?></strong>
        </div>
      </div>
      <?php endif; ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?php echo e($term ? "Результат поиска": "Список страниц"); ?></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li style="float: right!important;">
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php if(count($items)>0): ?>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Название</th>
                  <th>Опубликована</th>
                  <th>Дата создания</th>
                  <th>Тип</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($loop->index +1); ?></th>
                  <td>

                    <?php if( $item->name_ru != ""): ?>
                    <?php if(isset($item->link_ru)): ?>
                    <a href="/admin/static-page/<?php echo e($item->id); ?>?url=<?php echo e($item->link_ru); ?>">
                      <?php echo e($item->name_ru); ?>

                    </a>
                    <?php else: ?>
                    <a href="/admin/page/<?php echo e($item->id); ?>">
                      <?php echo e($item->name_ru); ?>

                    </a>
                    <?php endif; ?>

                    <?php elseif($item->name_kk != ""): ?>
                    <?php if(isset($item->link_ru)): ?>
                    <a href="/admin/static-page/<?php echo e($item->id); ?>?url=<?php echo e($item->link_kk); ?>">
                      <?php echo e($item->name_kk); ?>

                    </a>
                    <?php else: ?>
                    <a href="/admin/page/<?php echo e($item->id); ?>">
                      <?php echo e($item->name_kk); ?>

                    </a>
                    <?php endif; ?>
                    <?php elseif($item->name_en != ""): ?>
                    <?php if(isset($item->link_en)): ?>
                    <a href="/admin/page/<?php echo e($item->id); ?>?url<?php echo e($item->link_en); ?>">
                      <?php echo e($item->name_ru); ?>

                    </a>
                    <?php else: ?>
                    <a href="/admin/page/<?php echo e($item->id); ?>">
                      <?php echo e($item->name_en); ?>

                    </a>
                    <?php endif; ?>
                    <?php else: ?>
                    Название: -
                    <?php endif; ?>

                  </td>
                  <td><?php echo e($item->is_published ? "Да" : "Нет"); ?></td>
                  <td><?php echo e($item->created_at); ?></td>
                  <td class="hidden"><?php echo e($item->updated_at); ?></td>
                  <td><?php echo e(isset($item->is_static) ? 'статический' : "-"); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
            <?php else: ?>
            <center>
              <h1>По вашему поиску ничего найдено</h1>
            </center>
            <center>Показать <strong><a href="/admin/articles">список всех страниц</a></strong>
            </center>
            <?php endif; ?>
          </div>
          
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/pages/index.blade.php ENDPATH**/ ?>