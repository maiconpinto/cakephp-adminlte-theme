<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */

use Cake\Core\Configure;

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
$alertType = Configure::read('Theme.flash');
?>
<?php
switch($alertType) {
    case 'sweetalert': ?>

<?php $this->append('script'); ?>
<script>
    Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        icon: 'error',
        title: '<?= $message ?>'
    });
</script>
<?php $this->end(); ?>

<?php
    break;
    case 'toastr':
?>

<?php $this->append('script'); ?>
<script>
    toastr.error('<?= $message ?>');
</script>
<?php $this->end(); ?>

<?php
    break;
    case 'default':
    default:
?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> <?= __('Alert!') ?></h5>
    <?= $message ?>
</div>
<?php } ?>
