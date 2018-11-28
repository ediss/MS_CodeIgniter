<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
					<h2><?php echo ($this->session->flashdata('success')) ? $this->session->flashdata('success') : "Contact us"; ?></h2>
                    <h5><?php echo ($this->session->flashdata('success')) ? "Our team will contact You as soon as possible" : ""; ?></h5>
                </div>
            </div>
        </div>
    </section>
    
    <section class="row breadcrumbRow">
        <div class="container">
        
        </div>
    </section>
    <?php echo validation_errors('<div class="alert alert-danger error_message">','</div>'); ?>
    <?php echo (!empty($error)) ? ("<div class='alert alert-danger error_message'>".$error."</div>") : ""; ?>

    

    <section class="row contact_intro">
        <div class="container">
            <div class="row inner m0">
                <div class="col-sm-5 p0">
                    <img src="<?php echo base_url();?>images/contact_nova_medica.jpg" alt="">
                </div>
                <div class="col-sm-7">
                    <h2><font color="white">ABOUT US</font></h2>
                    <p>Swiss Medica has been established as a result of collaboration between the clinics from Switzerland known in the field of stem cells and the Belgrade Center for stem cells, in order to perform the stem cell treatment in accordance to the highest European standards and the best practices of modern medicine.</p>
					<p><strong>For more detailed information, please fill-in the questionnaire <a href="<?php echo base_url();?>Questionaire"> here</a>.</strong></p>
                    <div class="row m0 phone_fax"><div class="fleft phone">Tel:+381 62 256682</div></div>
                    <div class="row m0 email_address">E-Mail: consultant@startstemcells.com</div><br>
                    <div class="row m0 email_address">Open : <span style="color:#d11820;">  24/7</span>.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="row contact_form_row">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 contact_form_area">
                    <h3 class="contact_section_title">send us a message</h3>
                    <div class="contactForm row m0">
                        <?php echo form_open('Handler/contact', "class='row contact_form'"); ?>
                       <!-- <form action="handler.php" method="POST" class="row contact_form">-->
                            <div class="row m0">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_fname">Name</label>
                                        <?php 
                                            $data = array(
                                                'type'  => 'text',
                                                'name'  => 'name',
                                                'class' => 'form-control',
                                                'value' =>  set_value('name')
                                            );
                                            echo form_input($data);
                                        ?>
                                        <?php //echo form_error('name', '<p class="error">', '</p>'); ?>
                                     
                                    </div>
                                    <div class="input-group">
                                        <label for="contact_femail">E-mail</label>
                                        <?php 
                                            $data = array(
                                                'type'=>'email',
                                                'name'=>'email',
                                                'class'=>'form-control',
                                                'value' =>  set_value('email')
                                            );
                                            echo form_input($data);
                                        ?>
                                        
                                        <?php //echo form_error('email', '<p class="error">', '</p>'); ?>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_fphone">Phone number</label>
                                        <?php 
                                            $data = array(
                                                'type'=>'tel',
                                                'name'=>'phone',
                                                'class'=>'form-control',
                                                'value' =>  set_value('phone')
                                            );
                                            echo form_input($data);
                                        ?>
                                        <?php //echo form_error('phone', '<p class="error">', '</p>'); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <label for="contact_fmsg">Message</label>
                                    <?php 
                                            $data = array(
                                                'name'=>'message',
                                                'class'=>'form-control',
                                                'value' =>  set_value('message')
                                            );
                                            echo form_textarea($data);
                                    ?>
                                    <?php //echo form_error('message', '<p class="error">', '</p>'); ?>

                                    <!--<input type='hidden' name='hiddenTag'value='Dusan'>-->
                                </div>
                            </div>
                            <div class="row m0 security_recaptcha">
                                <div class="col-sm-12">
                                    
                                <?php echo $widget;?>
                                <?php echo $script;?>   

                                <?php if(!empty($recaptcha_error)){echo $recaptcha_error;} ?>
                               
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <?php
                                        $data = array(
                                            'name'=>'mysubmit',
                                            'class'=>'submit_btn',
                                            'value'=>'Send!',
                                            'id'=>'btnContact'
                                        );
                                        echo form_submit($data); ?>
                                    
                                </div>
                            </div>
                        <?php echo form_close();?>
     
                    </div>
                </div>
               
                
                <div class="col-sm-4 contact_address">
                    <h3 class="contact_section_title">Our e-mail address</h3>
                    <div class="row address m0">
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                            <div class="media-body address_text">consultant@startstemcells.com</div>
                        </div>
                      <!--   <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-phone"></i></div>
                            <div class="media-body address_text">+381 62 256682</div>
                        </div> -->
                    </div>
                </div>
            </div>

	
        </div>
    </section>
	

    <section class="row book_banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="row m0">
                        <h5>Contact us and our doctors will recommend you an individual therapy and will offer you the best stem cell application.</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="row m0">
                        <a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop" class="view_all">Request call from us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>