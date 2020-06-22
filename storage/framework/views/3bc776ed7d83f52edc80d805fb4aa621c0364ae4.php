<?php
/**
 * @var \Illuminate\Support\Collection|\Laravel\Telescope\EntryResult[] $entries
 */


?>
<?php $__env->startComponent('telescope-toolbar::item', ['name' => 'models', 'link' => true]); ?>

    <?php $__env->slot('icon'); ?>
        <?php echo file_get_contents('/Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/resources/icons/' . basename('models') . '.svg'); ?>

        <span class="sf-toolbar-value"><?php echo e($entries->count()); ?></span>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('text'); ?>

        <div class="sf-toolbar-info-piece">
            <table class="sf-toolbar-previews">

                <thead>
                <tr>
                    <th>Action</th>
                    <th>Model</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($entry->content['action']); ?>

                        </td>

                        <td>
                            <a href="<?php echo e(route('telescope')); ?>/models/<?php echo e($entry->id); ?>" target="_telescope">
                                <?php echo e($entry->content['model']); ?>

                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>

    <?php $__env->endSlot(); ?>

<?php if (isset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8)): ?>
<?php $component = $__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8; ?>
<?php unset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH /Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/src/../resources/views/collectors/models.blade.php ENDPATH**/ ?>