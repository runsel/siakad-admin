<?php
    $session = session();
    $messages = $session->getFlashdata('messages');
?>
<?php if($messages != null) { ?>
    <div class="alert alert-<?= $messages['type'] ?> alert-dismissible alert-data">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Sukses!</h5>
        <?= $messages['text'] ?>
    </div>
<?php } ?>