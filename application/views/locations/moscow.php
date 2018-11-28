<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1>SWISS MEDICA CLINIC IN MOSCOW </h1>
                    
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
                    <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Moscow Swiss Medica Clinic</h2>
					<p>Swiss Medica is a chain of clinics specialized in treatments with stem cells. One of our clinics highly renowned is located in the capital of Russia, where patients from all the continents come to improve the quality of life and symptoms of different diseases. Swiss Medica uses one natural method of healing, with stem cells of the patient that help us bring the health to a higher level and that stop the progression of the disease. We are improving different chronic diseases and our past results show our success.</p>
					<p>If you want to avoid long term dependence of chemical treatments and strong medicines, escape from eventual side effects and negative aspects of the treatment, a stem cell therapy will give you the opportunity to gain all of that and to reverse your problems and medical symptoms in a non-invasive way.</p>
                    <p>Have you ever considered an option of natural healing? Or you maybe suffer from a chronic disease that gives no response to conventional treatments? Are you looking for a center where your disease can be treated individually using natural healing methods? </p>
                    <br/>
                    <p><strong>You should opt for this treatment because it:</strong></p>
					<div class="opt">
                        <p><i class="fas fa-2x fa-heartbeat"></i> Improves the quality of life</p>
						<p><i class="fas fa-2x fa-heartbeat"></i> Alleviates chronic and acute diseases </p>
						<p><i class="fas fa-2x fa-heartbeat"></i> Helps to cure and prevent diseases </p>
                        <p><i class="fas fa-2x fa-heartbeat"></i> Reduces costs avoiding useless surgical interventions and long-term addiction to chemical treatments</p>						
                        <p><i class="fas fa-2x fa-heartbeat"></i> It’s safe and doesn’t cause side effects </li>
						<p><i class="fas fa-2x fa-heartbeat"></i> It doesn’t concern only symptoms of the disease but eliminates its cause as well</p>
						<p><i class="fas fa-2x fa-heartbeat"></i> Gives the patient an opportunity to have an active contribution in the healing process</p>
                    </div><br/>
					
			
                    <br>
                    <div class="tour"> 
                        <div style="margin-right: 0; width: 100%; float: none;">
                            <div style="width: 100%;padding-bottom: 75%;position: relative;margin-left: auto;margin-right: auto;">
                                <iframe style="border: none; overflow: hidden; height: 100%; width: 100%; position: absolute; top: 0;bottom: 0;left: 0;right: 0;" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo base_url(); ?>Locations/tour" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                            </div>
                        </div> 

                    </div>
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
                   
                </div>
               <div class="col-sm-4 sidebar">

                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">Locations</h5>
                        <ul class="list-unstyled services_list">
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/switzerland">SWITZERLAND</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/austria">AUSTRIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/slovenia">SLOVENIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/serbia">SERBIA</a></li>
                        </ul>
                    </div>
          
                </div>
            </div>
        </div>
    </section>
    
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