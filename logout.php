<?php session_start();
session_destroy();

?>
<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		echo '<meta http-equiv="refresh" content="2;URL=http://'.$_SERVER["HTTP_HOST"].'/index.php" />';
	?>
	  <div class="block gray" style="padding-top:220px;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h3>Logout...</h3>
                           					
                        </div>
                        <!-- Heading -->											
                     </div>
                  </div>
               </div>
            </div>
         </section>
     <?php 
	 
	 include ("footer.php");   ?>
	    </body>
</html>