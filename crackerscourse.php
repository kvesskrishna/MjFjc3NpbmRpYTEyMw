<?php require_once('head.php');?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Crackers Course</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE--> 
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
          <ul class="timeline">
                <li>
                  <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.21cssindia.com/new/workspace/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=crackerscourse&section_id=58');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
                    <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
                      <div class="timeline-panel" >
                        <div class="timeline-heading">
                          
                         <p class="pstyle"><span style="font-weight:400;">  <?php echo $section->section_title?></span> The crackers course is meant for those who have completed their graduation and are about to write IAS exam. It is a one-year advanced course emphasizing to develop the super refinery motor skills like answer writing skills. </p><br>
                         
                              <?php echo $section->section_content?>
                         
                        </div>
                      
                    </div>
                    <?php } ?>
                </li>

        
                <li>
                  <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.21cssindia.com/new/workspace/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=crackerscourse&section_id=60');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
                    <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
                      <div class="timeline-panel" title="click me">
                    
                        <div class="timeline-heading">
                        <h4 class="timeline-title"><?php echo $section->section_title?></h4>
                    
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      
                      <div class="panel-group wrap" id="bs-collapse">

                         <?php echo $section->section_content?> 
                          <!-- end of panel -->

                      </div>
                      <!-- end of #bs-collapse  -->

                  </div>

                             <!-- end panel top div -->
                       
                      </div>
                     <!--  <div class="timeline-body">
                        <p title="click" class="pstyle">
                          
                        </p>
                      </div> -->
                    
                    
                    </div>
                    <?php } ?>
                </li>
       </ul>

     </div>
     
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     
     				
                                <!-- Carousel
                                ================================================== -->
                                <div id="myCarousel" class="carousel slide">        
                                    <div class="carousel-inner">           
                                        <div class="item active"> 
                                            <!--<a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide1"></a>-->
                                            
                                            <div class="caption">
                                              <h4>Latest News</h4>
                                              
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                            </div>
                                        </div>
                                        <div class="item"> 
                                           <!-- <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide2"></a>-->
                                            <div class="caption">
                                              <h4>Latest News</h4>
                                                <p> Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam voluptua. </p>
                                            </div>                                                           
                                         </div>  
                                        <div class="item"> 
                                            <!--<a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide3"></a>-->
                                            <div class="caption">
                                              <h4>Latest News</h4>
                                                <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  erat, sed diam voluptua. </p>
                                            </div>                        
                                        </div>                                                                                   
                                    </div>
                                     <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                      </ol>                                                                 
                                </div><!-- End Carousel -->  
                            
     
     
     							
                                <div class="mocktest">
                                	<div class="mock">
                                	<h3>Take Mock Exams </h3>
                                    </div>
                                    <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info"> 
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span> Prelims Mock Exam – GS Paper-1(Polity)</a>
                                    
                                    
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span> Arithmetic Reasoning</a>
                                    
                                    
                                   
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                            
                                      
                                    
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                    
                                    
                                   
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                    
                                    
                                    
                                   
                                    </div>
                                
                                </div>
                                
                               
                               <div class="dwn">
                               			<h3>Download Brochure </h3>
                               			<a href="#" class="btn btn-success "><i class="fa fa-download fa-1x icon-white"></i> RIB -2016 Test Series</a><br><br>
                                        <a href="#" class="btn btn-success "><i class="fa fa-download fa-1x icon-white"></i> Mains GS &GE Daily & Weekend Tests</a>
                               </div>

                                <div>
                                <h3 style="color:#0C3C5A;">Your Downloads cart </h3>
                                <p style="color:#000;">You have 0 items in your shopping cart. </p>
                                
                                </div>
                                
                              
     
     
     </div>  <!-- 2nd end -->   
      </div> <!-- row div -->    
          
       
        </div>
      <?php require_once('footer.php');?>
   </div>
    <?php require_once('rightpanel.php');?>     
    <?php require_once('footscripts.php');?>
 
    <script> 
    
    $('#myCarousel').carousel({
    	interval:   4000
	});
    
    
    </script>
    
    
  <style>


 
        /*.container {
            max-width: 970px;
        }*/
        
       

   </style>

     <script>

    $(document).ready(function () {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
        });

   </script>

    
  </body>
</html>