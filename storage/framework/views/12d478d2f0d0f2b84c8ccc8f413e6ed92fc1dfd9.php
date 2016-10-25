<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Request</div>

          <div class="panel-body">
            <?php echo Form::model($DogRequest, ['action' => ['DogRequestsController@update', $DogRequest], 'method' => 'put']); ?>

            <?php echo $__env->make('DogRequests._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::open(['action' => 'DogRequestsController@store']); ?>

            <?php echo $__env->make('DogRequests._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::label('request', 'Gender: ', ['class' => 'control-label'])
            Form::text('gender', null, ['class' => 'form-control']); ?>


            <?php echo Form::label('request', 'Breed: ', ['class' => 'control-label'])
            Form::text('breed', null, ['class' => 'form-control']); ?>


            <?php echo Form::label('request', 'Location: ', ['class' => 'control-label'])
            Form::text('location', null, ['class' => 'form-control']); ?>


            <?php echo Form::label('request', 'Minimum Price: ', ['class' => 'control-label'])
            Form::text('price_range_low', null, ['class' => 'form-control']); ?>


            <?php echo Form::label('request', 'Maximum Price: ', ['class' => 'control-label'])
            Form::text('price_range_high', null, ['class' => 'form-control']); ?>


            <?php echo Form::label('request', 'Additional Notes: ', ['class' => 'control-label'])
            Form::text('notes', null, ['class' => 'form-control']); ?>



            <?php echo Form::submit('Edit'); ?>

            <?php echo Form::close(); ?>


            <?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>