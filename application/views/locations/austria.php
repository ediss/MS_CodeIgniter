<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1>Swiss Medica Austria (Dornbirn)</h1>
                    
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
                    <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Swiss Medica in Austria</h2>

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
				    <br><br/>
					
                   
            </div>
               <div class="col-sm-4 sidebar">

           
                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">Locations</h5>
                        <ul class="list-unstyled services_list">
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/switzerland">SWITZERLAND</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/slovenia">SLOVENIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/serbia">BELGRADE</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/russia">RUSSIA</a></li>
                        </ul>
                    </div>
                   
          
           
                </div>
            </div>
        </div>
    </section>
    <div class="gmap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.4875081208925!2d9.735533815623445!3d47.402431479171675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b6b33a4b002fb%3A0x4a0b75b9f9f9a705!2sLeopoldstra%C3%9Fe+2%2C+6850+Dornbirn%2C+Austria!5e0!3m2!1sen!2sit!4v1492776266151" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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