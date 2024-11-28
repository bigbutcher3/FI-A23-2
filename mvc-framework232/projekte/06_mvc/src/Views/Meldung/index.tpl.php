<?php
/** @var array|string $meldung */
/** @var string $link */
?>

<div class="card mt-5">
    <div class="card-body">
        <p class="card-title">
            <?php
            if (gettype($meldung) == 'array') {
                foreach ($meldung as $value) {
                    echo $value . NL;
                }
            } else {
                echo $meldung;
            }
            ?>
        </p>
        <div class="row">
            <div class="col-2">
                <a href="<?= $link; ?>" role="button" class="btn btn-outline-success btn-sm">zurück</a>
            </div>
        </div>
    </div>
</div>

