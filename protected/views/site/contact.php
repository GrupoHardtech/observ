<div class="container">
  <div class="row"> 
    <!-- sidebar -->
    <div class="col-md-3 sidebar">
      <div class="section-menu">
        <ul class="nav nav-list">
          <!-- <li class="nav-header">In This Section</li> -->
          <li class="active">
            <?php echo CHtml::link('Contact Us<small>How to get in touch</small><i class="icon-angle-right"></i>',array('site/contact'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
      </li>
        </ul>
      </div>
    </div>
    
    <!--main content-->
    <div class="col-md-9">
      <h2 class="title-divider"><span>Contact <span class="de-em">Us</span></span> <small>Ways To Get In Touch</small></h2>
      <div class="row">
        <div class="col-md-6">
          <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'contact-form',
              'enableClientValidation'=>true,
              'clientOptions'=>array(
                'validateOnSubmit'=>true,
                ),
                )); ?>

                <?php echo $form->errorSummary($model); ?>

                <div class="row">
                  <?php echo $form->labelEx($model,'name'); ?>
                  <?php echo $form->textField($model,'name'); ?>
                  <?php echo $form->error($model,'name'); ?>
                </div>

                <div class="row">
                  <?php echo $form->labelEx($model,'email'); ?>
                  <?php echo $form->textField($model,'email'); ?>
                  <?php echo $form->error($model,'email'); ?>
                </div>

                <div class="row">
                  <?php echo $form->labelEx($model,'subject'); ?>
                  <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                  <?php echo $form->error($model,'subject'); ?>
                </div>

                <div class="row">
                  <?php echo $form->labelEx($model,'body'); ?>
                  <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                  <?php echo $form->error($model,'body'); ?>
                </div>

                <div class="row buttons">
                  <?php echo CHtml::submitButton('Submit'); ?>
                </div>

                <?php $this->endWidget(); ?>

              </div><!-- form -->
          <!-- <form id="contact-form" action="#" role="form">
            <div class="form-group">
              <label class="sr-only" for="contact-name">Name</label>
              <input type="text" class="form-control" id="contact-name" placeholder="Name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="contact-email">Email</label>
              <input type="email" class="form-control" id="contact-email" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="contact-message">Message</label>
              <textarea rows="12" class="form-control" id="contact-message" placeholder="Message"></textarea>
            </div>
            <input type="button" class="btn btn-primary" value="Send Message">
          </form> -->
        </div>
        <div class="col-md-6">
          <p><abbr title="Phone"><i class="icon-phone"></i></abbr> +86-20-32071643</p>
          <!-- <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p> -->
          <p><abbr title="Location"><i class="icon-home"></i></abbr> Floor 4, Building B, Taoyuan Industrial Park, Huangpu East Development Zone, Guangzhou, China</p>
          <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.pe/maps/ms?msa=0&amp;msid=210394801281966518307.0004e9429f7015a1c0a19&amp;ie=UTF8&amp;t=m&amp;ll=23.218789,113.579235&amp;spn=0.047327,0.051498&amp;z=13&amp;output=embed"></iframe><br /><small>Ver <a href="https://www.google.com.pe/maps/ms?msa=0&amp;msid=210394801281966518307.0004e9429f7015a1c0a19&amp;ie=UTF8&amp;t=m&amp;ll=23.218789,113.579235&amp;spn=0.047327,0.051498&amp;z=13&amp;source=embed" style="color:#0000FF;text-align:left">23 Yong Sheng Lu</a> en un mapa más grande</small>
        </div>
      </div>
    </div>
  </div>
</div>