<section class="row page_intro">

<div class="row m0 inner">

    <div class="container">

        <div class="row">

            <h1>SWISS MEDICA CLINIC IN SERBIA</h1>

            

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

            <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Swiss Medica</h2>

            <p>Swiss Medica clinic situated in Belgrade is specialized in neurodegenerative diseases and is helping patients to significantly improve their symptoms with the stem cells treatment. The position of the clinic is particularly convenient for any European resident because it’s well connected with all the cities and easily accessible by plane.</p>

            <p>Our clinic brought the stem cell treatment to a completely new level, which means that we’re creating and personalizing each treatment for a specific patient. We understand that the symptoms like the age, progression of the disease, gender, health conditions, medical history etc. vary and are unique for each individual. Therefor we try to inform ourselves about each detail about our patient in order to create a perfectly combination of the treatment.</p>

            <p>Our team of professionals consists of highly qualified experts from all over the world that have united their knowledge, power, wisdom and strength in order to help patients gain the second chance and improve their quality of life in a way that wasn’t possible ever before. With more than 15 years of experience in this field and more than 30 medical experts, we offer the best treatment option in the market. Being always a part of different medical conferences about stem cells in the entire world, we have shown that our involvement in this revolutionary discovery is very important.</p>

            <br>

            <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span>Gallery</h2>					

<!--              <div class='gallery-resposnive'>-->
            <div class='col-lg'>
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
              <div class='cleaner'></div>
                <div class="col-md-12 text-center">
                    <?php echo $pagination; ?>
                </div>
				    <br/><br/>

        </div>

       <div class="col-sm-4 sidebar">

            <div class="row m0 widget other_services">
                <h5 class="widget_heading">Locations</h5>
                    <ul class="list-unstyled services_list">
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/switzerland">SWITZERLAND</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/austria">AUSTRIA</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/slovenia">SLOVENIA</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>Locations/russia">RUSSIA</a></li>
                    </ul>
            </div>






        </div>

    </div>

</div>

</section>

<div class = "gmap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.637810972503!2d20.36621231571289!3d44.849308882281186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65d86bf3d847%3A0xa24cee9acb3597c4!2z0KPQs9GA0LjQvdC-0LLQsNGH0LrQuCDQv9GD0YIgMTYsINCR0LXQvtCz0YDQsNC0!5e0!3m2!1ssr!2srs!4v1529489895220" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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


