<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
        .wrapper {
    background-color: #fff !important;
}
            .input-group .input-group-addon {
    padding: 10px 40px;
}
    @media (min-width: 320px) and (max-width: 427px) {
        .responsive-img{
     display: none !important;
   
        }
        
        .h4{
            
            margin-top: 600px !important;
        }
        .mobile_logo{
     
     background-color: #a09797 !important;
      display:block !important;
      margin: 0 auto; 
        }
      .mobile_logo_img{
          max-width: 250px !important;
        margin-left: 40px;
        }
        .wrapper-full-page .heading {
            margin-top: -10px !important;
        }
        
        .login-details{
            background-image: url("../images/login-bg_1.jpg");
              
        }
    }
   @media (max-width: 700px) and (min-width: 320px) {   
  .responsive-img{
     display: none !important;
   
        }
         .h4{
            
            margin-top: 600px !important;
        }
        .mobile_logo{
          background-color: #a09797 !important;
      display:block !important;
      margin: 0 auto; 
        }
      .mobile_logo_img{
          max-width: 250px !important;
        margin-left: 40px;
        }
        .wrapper-full-page .heading {
            margin-top: -10px !important;
        }
         .login-details{
            background-image: url("../images/login-bg_1.jpg");
              
        }
        .wrapper{
            overflow-y: hidden;
        }

}
.fa{
    padding-top: 10px;
    padding-left: 10px;
}
.form-group .form-control {
    float: left;
}
.form-group .help-block{
    float: left !important;
}
        </style>

  <div class="mobile_logo"  style="display:none;">
         <img  class="mobile_logo_img" alt="" src="<?= Yii::$app->request->baseUrl ?>/images/LMSLogowhite.png" >
    </div>
<div class="wrapper wrapper-full-page">
  
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-5 col-md-5 col-lg-5">
 
            <div class="login-details">
                      
                <div class="heading text-center">
                
                    <h2><b><?= Html::encode($this->title) ?></b></h2>
                    <p>Please enter your new password:</p>
                </div>
               
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                <div class="input-group">  
                    <span class="input-group-addon">
                        <?=
                        $form->field($model, 'password', [
                            'inputTemplate' => '
					{input}
					<span class="icon">
						<i class="fa fa-key"></i>
					</span>
				']
                        )->passwordInput(['maxength' => true]
                        )->passwordInput(['css' => 'form-control']
                        )->label('password', ['class' => 'control-label'])
                        ?>
                    </span>
                </div>

                <div class="input-group">  
                    <span class="input-group-addon">
                        <?=
                        $form->field($model, 'confirm_password', [
                            'inputTemplate' => '
					{input}
					<span class="icon">
						<i class="fa fa-key"></i>
					</span>
				']
                        )->passwordInput(['maxength' => true]
                        )->passwordInput(['css' => 'form-control']
                        )->label('confirm password', ['class' => 'control-label'])
                        ?>
                    </span>
                </div>

                <div class="form-group login-btn">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>



                <?php ActiveForm::end(); ?>
            </div>
        </div> 

        <div class="col-sm-7 col-md-7 col-lg-7">
            <img alt="" src="<?= Yii::$app->request->baseUrl ?>/images/login-bg_1.jpg" class="responsive-img">
        </div>
    </div>

</div>