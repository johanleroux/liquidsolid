<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">Show Request</div>

        <div class="panel-body">
          <?php echo Form::open(['action' => 'DogRequestsController@index']); ?>

          <table class="table table-striped">
            <tr>
              <th>Gender</th>
              <th>Breed</th>
              <th>Location</th>
              <th>Min Price</th>
              <th>Max Price</th>
              <th>Notes</th>
            </tr>
            <tr>
              <td><?php echo e($dog_request->gender); ?></td>
              <td><?php echo e($dog_request->breed); ?></td>
              <td><?php echo e($dog_request->location); ?></td>
              <td>R <?php echo e($dog_request->price_range_low); ?></td>
              <td>R <?php echo e($dog_request->price_range_high); ?></td>
              <td><?php echo e($dog_request->notes); ?></td>
            </tr>
          </table>
          <a href="<?php echo e(action('DogRequestsController@index')); ?>">Back</a>
          <?php echo Form::submit('Back'); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>