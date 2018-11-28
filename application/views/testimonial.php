<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h5>Testimonianze</h5>
                    <h2>COSA DICONO DI NOI - I NOSTRI PAZIENTI</h2>
                </div>
            </div>
        </div>
    </section>
    
     <section class="row breadcrumbRow">
        <div class="container">
        </div>
    </section>
    
    <section class="row content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row m0 blog single_post">
                    <h3>Nuova terapia Sclerosi Multipla con le Cellule Staminali</h3>
                        <div class="image_row row m0">
                            <iframe width="750" height="422" src="<?php echo $video->link;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>   
                        <blockquote><?php echo $video->naslov; ?></blockquote>
                        <p></p>

                        
                        

                    
                     </div> <!--Single Post-->
                   
                    <div class="row pager">
                        <div class="col-sm-6 prev">
                            <!--<div class="inner row m0">
                                <a href="il-trattamento-della-malattia-di-parkinson.html"><i class="fa fa-arrow-left"></i> Storia Precedente</a><br>
                                <a href="il-trattamento-della-malattia-di-parkinson.html">La cura del Parkinson innovativo</a>
                            </div>-->
                        </div>
                        <?php //if($next->id_video !=NULL){
                            if(!empty($next)){?>
                        <div class="col-sm-6 next">
                            <div class="inner row m0">
                                <a href="<?php echo base_url();?>testimonials/testimonial/<?php echo $next->id_video;?>">Next story <i class="fa fa-arrow-right"></i></a><br>
                                <a href="<?php echo base_url();?>testimonials/testimonial/<?php echo $next->id_video;?>"><?= $next->naslov ?></a>
                            </div>
                        </div>
                        <?php
                            }   
                        ?>
                    </div>
                    
                </div>
                <div class="col-sm-4 sidebar">
                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">Testimonials</h5>
							<ul class="list-unstyled services_list">
                            <?php
							    foreach($testimonials as $row){
								    $id=$row->id_video;
                           
								?>
								<li <?php echo($mojid==$id) ? $active : ""; ?>><i class="fa fa-arrow-right"></i><a href="<?php echo base_url();?>testimonials/testimonial/<?php echo $id;?>"><?php echo $row->naslov;?></a></li>
								<?php 
									}
								?>
							</ul>
                    </div>

                   
    </section>
    
    <section class="row book_banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="row m0">
                        <h5>Contattateci ed i nostri medici Vi consiglieranno la terapia individuale e Vi offriranno la migliore applicazione di cellule staminali.</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="row m0">
                        <a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop" class="view_all">Richiedi una telefonata</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    