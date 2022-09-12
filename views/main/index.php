<?php
    use yii\helpers\Html;
    use yii\bootstrap5\ActiveForm;
?>

<?php 
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'time') ?>
<?= $form->field($model, 'amount') ?>

<div class="form-group">
    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
</div>

<?= "<hr>" . "Среднее квадратичное отклонение на данный момент равняется \t". $disp; ?>

<?php ActiveForm::end(); ?>
