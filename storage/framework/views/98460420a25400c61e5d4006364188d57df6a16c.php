<?php
/** @var \Illuminate\Support\Collection|\Laravel\Telescope\EntryResult[] $entries */
$data = $entries->first()->content['user'] ?? [];

?>

<?php $__env->startComponent('telescope-toolbar::item', ['name' => 'user', 'link' => true]); ?>

    <?php $__env->slot('icon'); ?>

        <?php echo file_get_contents('/Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/resources/icons/' . basename('user') . '.svg'); ?>

        <span class="sf-toolbar-value"><?php echo e($data['email'] ?? 'n/a'); ?></span>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('text'); ?>
        <?php if($data): ?>
            <div class="sf-toolbar-info-group">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($value)): ?>
                        <div class="sf-toolbar-info-piece">
                            <b><?php echo e($key); ?></b>
                            <span><?php echo e($value); ?></span>
                        </div>
                    <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    <?php $__env->endSlot(); ?>

<?php if (isset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8)): ?>
<?php $component = $__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8; ?>
<?php unset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH /Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/src/../resources/views/collectors/user.blade.php ENDPATH**/ ?>