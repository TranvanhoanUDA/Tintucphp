<?php include './views/view_trangchu/hed.php';?>
<div class="container-fluid ">

        <div class="container-fluid">
          <div class="row">
            <?php include './views/view_trangchu/menu.php';?>
            <div class="col-md-9">
            	 <div class="panel panel-default">
					 <div class="panel-heading" style="background-color:#FF5733; color:white;" >	 	
					     <h2 style="margin-top:0px; margin-bottom:0px;"><?php  echo $tintuca['1']; ?> </h2>	      
					 </div>
					  <div class="panel-body">
						<div class="row-item row">	                	
						    <div class="col-md-12 border-right">
						        <div class="col-md-6">
							       <a href="?trangchu">
									     <img class="img-thumbnail"width="100%" height="100%" src="<?php echo './img/' . $tintuca['4'] . '?time=' . time() . ' />' ; ?>" alt=""> </a>   	 	                
							    </div>
				                <div style="text-align:left;" class="production-detail col-lg-6 col-md-6 col-sm-6 col-xs-6">
														 
														<p>ngày đăng: <?php  echo $chitiettintuc[1]; ?> </p>
														<span style="color: #5f00bf"><p> Tag: <?php echo $tintuca['3']; ?> $</p></span>
														<p> <?php  echo $tintuca['2'] ?></p>
														<p>Tác giả : <?php  echo $chitiettintuc[2]; ?></p>
													    
								</div>
												

						    </div>

											<div class="break"></div>
						</div>
								
						              

					</div>

				</div>

        	</div>
        </div>
         <?php include 'views/shares/footer.php'; ?>