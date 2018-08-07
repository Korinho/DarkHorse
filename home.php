<?php   
		include ("head.php");
		include ("header.php");
		include ("slide.php");
	?>
         <section>
            <div class="block gray" style="padding-top:120px;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h3>Consulting Positions is a full-service international consulting agency offering recruitment and placement services.</h3>
                           <span>In recognizing qualified individuals and matching them with companies seeking consulting services, we are creating global opportunities. We also offer business consultancy services and strive to act as an intermediary between qualified management consultants and companies in need.							</span>						
                        </div>
                        <!-- Heading -->											
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="tab-sec">
                           <ul class="nav nav-tabs">
                              <li><a class="current" data-tab="fjobs">Trending Jobs</a></li>
                              <li><a data-tab="rjobs">Recent Jobs</a></li>
                           </ul>
                           <div id="fjobs" class="tab-content current">
                              <div class="job-listings-tabs">
                                 <div class="row">
                                     <?php 
                                       $vac = ctrVacantes::ctrMostrarVacantesVistas();
                                       foreach ($vac as $key1 => $row) {    
                                       if($row["display"] == 1){                                     
                                     ?>
                                    <div class="col-lg-6">
                                       <div class="job-listing wtabs">
                                          <div class="job-title-sec">
                                             <div class="c-logo"> <img src="<?php echo $row['logo']; ?>" alt="" /> </div>
                                             <h3><a href="vacancy?id=<?php echo $row["id"]; ?>" title=""><?php echo $row["job"]; ?></a></h3>
                                             <span><?php echo $row["nombre"]; ?></span>													
                                             <div class="job-lctn"><i class="la la-map-marker"></i><?php echo $row["country"]; ?></div>
                                          </div>
                                          <div class="job-style-bx"><span class="job-is ft fill"><?php echo $row["salary"]; ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 <?php } 
                              }?>
                                 </div>
                              </div>
                           </div>
                           <div id="rjobs" class="tab-content">
                              <div class="job-listings-tabs">
                                 <div class="row">
                                    <?php 
                                       $Vacantes = ctrVacantes::ctrMostrarVacantesRecientes();
                                       foreach ($Vacantes as $key =>$value) {
                                          if($value["display"] == 1){
                                     ?>
                                    <div class="col-lg-6">
                                       <div class="job-listing wtabs">
                                          <div class="job-title-sec">
                                             <div class="c-logo"> <img src="<?php echo $value['logo']; ?>" alt="" /> </div>
                                             <h3><a href="vacancy?id=<?php echo $value["id"]; ?>" title=""> <?php echo $value['job']; ?></a></h3>
                                             <span><?php echo $value['nombre']; ?></span>											
                                             <div class="job-lctn"><i class="la la-map-marker"></i><?php echo $value['country']; ?></div>
                                          </div>
                                          <div class="job-style-bx">					
                                          <span class="job-is ft fill"><?php echo $value['salary']; ?></span>                                
                                       </div>
                                       </div>								
                                    </div>
                                    <?php }
                                 } ?>
                                 </div>
                              </div>
                           </div>
                           <div class="browse-all-cat"><a href="vacancies" title="" class="style2">Load more listings</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="block gap-top gap-bottom">
               <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color blue"></div>
               <!-- PARALLAX BACKGROUND IMAGE -->			
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="simple-text-block">
                           <h3>Looking for candidates to hire ?</h3>
                           <span>Check out our resumes page and find the right candidates for the job</span>							<a href="resumes.php" title="" class="rounded">Browse Resumes</a>						
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="block gray">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h2></h2>
                           <span></span>						
                        </div>
                        <!-- Heading -->						
                        <div class="blog-sec">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="my-blog">
                                    <div class="blog-thumb">
                                       <a href="#" title=""><img src="http://consultingpositions.net/web/images/box-america.png" alt="" /></a>											<!--<div class="blog-metas">												<a href="#" title="">March 29, 2017</a>												<a href="#" title="">0 Comments</a>											</div>-->										
                                    </div>
                                    <div class="blog-details">
                                       <h3><a href="#" title="">America</a></h3>
                                       <p>We provide consultants for Operational Performance, Strategy, SAP/IT functions and systems .. </p>
                                       <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>										
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="my-blog">
                                    <div class="blog-thumb">											<a href="#" title=""><img src="http://consultingpositions.net/web/images/box-emea.png" alt="" /></a>																					</div>
                                    <div class="blog-details">
                                       <h3><a href="#" title="">EMEA</a></h3>
                                       <p>Consultants & contractors - Operational Consulting firms | Interim Managers, Executives - industrial clients </p>
                                       <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>										
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="my-blog">
                                    <div class="blog-thumb">											<a href="#" title=""><img src="http://consultingpositions.net/web/images/box-asiapacific.png" alt="" /></a>																					</div>
                                    <div class="blog-details">
                                       <h3><a href="#" title="">Asia-Pacific</a></h3>
                                       <p>Contractors Mining, Manufacturing, Oil/Gas, Finance... | Industrial recruitments: plant managers... - SE Asia </p>
                                       <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>										
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="block">
               <div data-velocity="-.3" style="background: url(images/resource/parallax6.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div>
               <!-- PARALLAX BACKGROUND IMAGE -->			
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h2>Testimonial</h2>
                           <span>What other people thought about the service provided by JobHunt</span>						
                        </div>
                        <!-- Heading -->						
                        <div class="reviews-sec" id="reviews">
                           <div class="col-lg-12">
                              <div class="reviews style2">
                                 <img src="images/resource/r1.jpg" alt="" />									
                                 <h3>Augusta Silva <span>Web designer</span></h3>
                                 <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service level that they offer!</p>
                              </div>
                              <!-- Reviews -->							
                           </div>
                           <div class="col-lg-12">
                              <div class="reviews style2">
                                 <img src="images/resource/r2.jpg" alt="" />									
                                 <h3>Ali Tufan <span>Web designer</span></h3>
                                 <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service level that they offer!</p>
                              </div>
                              <!-- Reviews -->							
                           </div>
                           <div class="col-lg-12">
                              <div class="reviews style2">
                                 <img src="images/resource/r1.jpg" alt="" />									
                                 <h3>Augusta Silva <span>Web designer</span></h3>
                                 <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service level that they offer!</p>
                              </div>
                              <!-- Reviews -->							
                           </div>
                           <div class="col-lg-12">
                              <div class="reviews style2">
                                 <img src="images/resource/r2.jpg" alt="" />									
                                 <h3>Ali Tufan <span>Web designer</span></h3>
                                 <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service level that they offer!</p>
                              </div>
                              <!-- Reviews -->							
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <?php include ("footer.php");   ?>
	    </body>
</html>