<?php


/* @var $this yii\web\View */
/* @var $model frontend\models\HomeScreenMessages */

$this->title = 'Update Home Screen Messages: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Home Screen Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<style>
    .btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary.active, .btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active:hover{
        padding: 12px 1px 7px 1px !important;
        width: 80px !important;
        margin: 10px 3px !important;
        background: #f44336;
    }
    .btn.btn-success{
        padding: 12px 1px 7px 1px !important;
        width: 80px !important;
        margin: 10px 3px !important;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header1 card-header-text"
                         data-background-color="blue">
                        <h4 class="card-title">UPDATE HOME SCREEN MESSAGE</h4>
                    </div>
                    <div class="card-content">

                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
