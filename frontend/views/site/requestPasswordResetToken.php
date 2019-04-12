<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
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
                
                    <h4><b> PASSWORD RESET</b></h4>
                    <p>please enter your email to get password reset link.</p>
                </div>
               
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                <div class="input-group">  
                    <span class="input-group-addon">
                        <?=
                        $form->field($model, 'email', [
                            'inputTemplate' => '
					{input}
					<span class="icon">
						<i class="fa fa-envelope-o"></i>
					</span>
				']
                        )->textInput(['autofocus' => true, 'css' => 'form-control']
                        )->label('Email Id', ['class' => 'control-label'])
                        ?>
                    </span>
                </div>
                <div class="form-group login-btn">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
                </div>



                <?php ActiveForm::end(); ?>
            </div>
        </div> 

        <div class="col-sm-7 col-md-7 col-lg-7">
            <img alt="" src="<?= Yii::$app->request->baseUrl ?>/images/login-bg_1.jpg" class="responsive-img">
        </div>
    </div>

</div>

