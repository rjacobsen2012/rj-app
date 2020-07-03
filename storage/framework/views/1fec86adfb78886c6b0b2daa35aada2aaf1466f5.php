<?php
/** @var \Illuminate\Support\Collection|\Laravel\Telescope\EntryResult[] $entries */
$data = $entries->first()->content;

$dumper = new \Symfony\Component\VarDumper\Dumper\HtmlDumper();
$varCloner = new \Symfony\Component\VarDumper\Cloner\VarCloner();

?>

<?php $__env->startComponent('telescope-toolbar::item', ['name' => 'dump', 'link' => false]); ?>

    <?php $__env->slot('icon'); ?>
        <?php echo file_get_contents('/Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/resources/icons/' . basename('session') . '.svg'); ?>
        <span class="sf-toolbar-value sf-toolbar-info-piece-additional">Session</span>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('text'); ?>

        <?php if(isset($data['session'])): ?>
        <div class="sf-toolbar-info-piece">
            <div class="sf-toolbar-dump">

               <?php echo $dumper->dump($varCloner->cloneVar($data['session'])); ?>


            </div>
        </div>
        <?php endif; ?>


    <?php $__env->endSlot(); ?>

<?php if (isset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8)): ?>
<?php $component = $__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8; ?>
<?php unset($__componentOriginal431b364d377d769487a424b2915cb74feab0ffb8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Users/richardjacobsen/development/rj-app/vendor/fruitcake/laravel-telescope-toolbar/src/../resources/views/collectors/session.blade.php ENDPATH**/ ?>