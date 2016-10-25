<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">Dog Requests Index <a href="<?php echo e(action('DogRequestsController@create')); ?>" class="btn blue btn-xs btn-outline pull-right">Create <i class="fa fa-plus"></i></a></div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr>
              <th>Edit</th>
              <th>ID</th>
              <th>Breed</th>
              <th>Location</th>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
            <tr>
                <td><a href="<?php echo e(action('DogRequestsController@edit', $item)); ?>">[Edit]</a></td>
                <td><a href="<?php echo e(action('DogRequestsController@show', $item)); ?>"><?php echo e($item->id); ?></a></td>
                <td><?php echo e($item->breed); ?></td>
                <td><?php echo e($item->location); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
            <table>List is empty</table>
            <?php endif; ?>
          </table>
          <?php echo e($list->links()); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>