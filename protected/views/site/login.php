<div style="text-align: center; margin-bottom: 145px">
    <br/>
    <div class="form" style="display: inline-block">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>
        <div class="login-form row" style="width: 600px">
            <h2 style="color: white"> Inventory System <i class="fa fa-line-chart"></i></h2>
            <hr/>
            <div class="col-lg-8 text-align-left" style="border-right: 2px solid white;">
                <div class="form-group">
                    <?php echo $form->textField($model,'username', array('class' => 'username form-control', 'placeholder'=>'Username')); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <div class="row">
                    <?php echo $form->passwordField($model,'password', array('class' => 'username form-control', 'placeholder'=>'Password')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>


                <div class="row rememberMe" style="color: #63BBDD">
                    <?php echo $form->checkBox($model,'rememberMe'); ?>
                    <?php echo $form->label($model,'rememberMe'); ?>
                    <?php echo $form->error($model,'rememberMe'); ?>
                </div>

                <div class="row buttons">
                    <?php echo CHtml::submitButton('Log me in...', array('class'=>'btn btn-success')); ?>
                </div>
            </div>
            <div class="col-lg-4 text-align-left" style="color: white">
                <i class="fa fa-bar-chart" style="font-size: 160px;"></i>
            </div>

        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->

</div>
