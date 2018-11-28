<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1>SWISS MEDICA CENTER IN SWITZERLAND </h1>

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
                    <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Swiss Medica main office in St. Gallen </h2>
                    <div class="col-sm-5">
                        <img src="<?php echo base_url();?>images/swiss-medica-stgallen-main-office.jpg" alt="" class="img-responsive">
                    </div>
                    
                    <div class="col-sm-7">
                        <p>Besides Swiss Medica clinics in Russia and Serbia, the main Swiss Medica office is in St. Gallen, in Switzerland, where the general condition of the patient and his vitality are being evaluated. After the diagnostics, our medical team makes an individualized treatment plan and the patient is being directed to Belgrade or Moscow for the planed treatment procedure.</p>
                        <ol>
                            <li>Consultations</li>
                            <li>Diagnostics</li>
                            <li>Evaluation</li>
                            <li>Treatment plan</li>
                        </ol>
                        <p><strong>Address: </strong>St. Galler street, 23/25, 9403 Goldach, St. Gallen, Switzerland </p>
                        <p><strong>Phone number:</strong> +41-43-5085525</p>
                    </div>
                    <br />
                    <div class="klir"></div><br />
                    
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
        

                </div>
                <div class="col-sm-4 sidebar">

                  
                  <div class="row m0 widget other_services">
                        <h5 class="widget_heading">Locations</h5>
                        <ul class="list-unstyled services_list">
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/austria">AUSTRIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/slovenia">SLOVENIA</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/belgrade">BELGRADE</a></li>
                            <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/russia">RUSSIA</a></li>
                        </ul>
                    </div>
                  
        
                </div>
            </div>
        </div>
    </section>
    <div class="gmap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.6037843369572!2d9.473831915399586!3d47.47815000483608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b1b905373be89%3A0x4e90b69c31049fe1!2sSt.+Gallerstrasse+23%2C+9403+Goldach%2C+Switzerland!5e0!3m2!1sen!2sru!4v1469478053273" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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