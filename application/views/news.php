<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1>News about treating Multiple Sclerosis with Stem Cells</h1>
                     
                </div>
            </div>
        </div>
    </section>
    
   
    
    <section class="row content_section">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 col-md-8 blog_list">
       
                    <?php
                    
                    if(!empty($all)){
                        foreach($all as $row){
                           // $id=$row->id_news;
                           $id=$row->id_page;
                            ?>
                            
                            <div class="media blog">						
                                <div class="media-left">
                                    <a href="<?php echo base_url();?>News/single_news/<?php echo $id;?>">
                                        <img src="<?php echo base_url().$row->img?>" alt="<?php echo $row->alt;?>" class="img-reponsive">
                                    </a>
                                </div>
                                <div class="media-body">
                                <a href="<?php echo base_url();?>News/single_news/<?php echo $id;?>">
                                        <h3><?php echo $row->naslov;?></h3>
                                    </a>
                                    <p><?php echo $row->tekst;?></p>
                                    <a href="<?php echo base_url();?>News/single_news/<?php echo $id;?>" class="view_all">continue</a>
                                </div>
                            </div>
                        <?php
                            }
                    }

                    
                    ?>

  
                        <div class="col-md-12 text-center">
                            <?php echo $pagination; ?>
                        </div>                    
                    </div>
                   <div class="col-sm-4 sidebar">

                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">News</h5>
                        <ul class="list-unstyled services_list">
                            <?php

                            if(!empty($all_news)){
                                foreach($all_news as $row){
                                //$id=$row->id_news;
                                $id=$row->id_page;
                            ?>
        
                           <li><i class="fa fa-arrow-right"></i><a href="<?php echo base_url();?>News/single_news/<?php echo $id;?>"><?php echo $row->naslov;?></a></li>
                           <?php
                                }
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