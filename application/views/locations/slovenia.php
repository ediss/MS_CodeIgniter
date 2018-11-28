<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1>Swiss Medica in Slovenia</h1>
                    
                </div>
            </div>
        </div>
    </section>
    
 <section class="row breadcrumbRow">
        <div class="container">
        </div>
    </section>
    
    <section class="row service_details">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 serviceDetailsSection">                    
                    <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Swiss Medica in Slovenia</h2>
                    <p>Swiss Medica center situated in Slovenia is specialized in neurodegenerative diseases and is helping patients to drastically improve their symptoms with the stem cell treatment. The position of the clinic is particularly convenient for any European resident because it’s well connected with all the cities and easily accessible by plane.</p>
					<p>Our clinic brought the stem cell treatment to a completely new level, which means that we’re creating and personalizing each treatment for a specific patient. We understand that the factors like the age, progression of the disease, gender, health conditions, medical history etc. vary and are unique for each individual. Therefor we try to inform ourselves about each detail about our patient in order to create a perfect combination of the treatment.</p>
					<ol>
						<li>Consultations</li>
						<li>Diagnostics</li>
						<li>Evaluation</li>
						<li>Treatment plan</li>
					</ol>
		
					<div class="pagination-test">
                <?php
                    if(!empty($deptlist)){
                        //foreach($deptlist as $img){
                        for($i=0;$i<count($deptlist);$i++){
                ?>     
                        <a class="fancybox" href="<?php echo base_url().$deptlist[$i]->putanja; ?>" data-fancybox-group="gallery" title=" "><div class="col-sm-6 gallery-locations" style="margin:10px 0 10px 0;"><img src="<?php echo base_url().$deptlist[$i]->putanja;?>" alt="" class="img-responsive"></div></a>
                <?php
                        }
                    }
                ?>
                </div>
                <div class="col-md-12 text-center">
                    <?php echo $pagination; ?>
                </div>
				    <br/><br/>
					<br>
				
					<br>
					
                    
                </div>
                
               <div class="col-sm-4 sidebar">

                    
                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">Locations</h5>
                        <ul class="list-unstyled services_list">
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/switzerland">SWITZERLAND</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/austria">AUSTRIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/serbia">SERBIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/russia">RUSSIA</a></li>
                            
                        </ul>
                    </div>
         
                </div>
            </div>
        </div>
    </section>
    <div class="gmap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1379.8030060965498!2d15.63686655654113!3d46.23817918948575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47658f8a2b90eb1d%3A0xca16b9aec77695cc!2sZdravili%C5%A1ki+trg+3%2C+3250+Roga%C5%A1ka+Slatina%2C+Slovenia!5e0!3m2!1sen!2sru!4v1467698656115" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <section class="row quick_blocks_row quick_blocks_row2">
        <div class="container">
            <div class="row">
                
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