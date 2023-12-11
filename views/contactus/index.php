<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>


<!-- Start Call to action -->
    <section class="call-action overlay" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>CONTACT US</h2>
							<p>At our company, we prioritize customer satisfaction above all else. We take pride in providing the best services that not only meet but exceed our customers' expectations. With our commitment to excellence and attention to detail, we ensure that every interaction and experience with us is nothing short of exceptional.</p>
							<div class="button">
								<a href="/contactus" class="btn">Contact Now</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

<!-- Start Appointment -->
<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Message Us</h2>
							<img src="img/section-img.png" alt="#">
							<p style="text-align: center;">Fill the following form to send us a comment</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
					<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php else: ?>

    <p>
        If you have any questions, please fill out the following form to contact us. Thank you.
    </p>

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name']) ?>

    <?= $form->field($model, 'email')->textInput(['type' => 'email', 'placeholder' => 'Email']) ?>

    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone']) ?>

    <?= $form->field($model, 'country')->dropDownList(['1' => 'Tanzania', '2' => 'Kenya', '3' => 'Uganda'], ['prompt' => 'Select Country']) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6, 'placeholder' => 'Write Your Message Here...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Click here to Send Message :)', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php endif; ?>


					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="images/APP ORG.png" alt="#">
						</div>
					</div>
				</div>
			</div>

			
  <!-- Bg Shape -->
 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1973.6666828679176!2d39.211039011309325!3d-6.7009263765350555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c51d6a41cd1c5%3A0x947c008fbb9d80fd!2sTera%20Technologies%20and%20Engineering%20Ltd%20HQ!5e0!3m2!1ssw!2stz!4v1659686748013!5m2!1ssw!2stz" width="1500" height="800" style="border:0; <!--filter:invert(100%)--><!--;-->" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
             

		</section>
		<!-- End Appointment -->


          
		
    
          