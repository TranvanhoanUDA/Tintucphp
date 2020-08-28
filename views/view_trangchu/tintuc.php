<?php include './views/view_trangchu/hed.php';?>
<div class="container-fluid">
   <div class="container-fluid">
        <div class="row">
            
          <?php include './views/view_trangchu/menu.php';?>


            <div class="col-md-9 pt-3">
              <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#41c04d; color:white;" >
                      <h2 style="margin-top:0px; margin-bottom:0px;">Chuyên mục <?php echo $chuyenmucb['1']; ?></h2>
                    </div>
                      
                <div class="col-md-12">
                    
                    <?php
                    foreach ($tintucb as $key => $tintuc) {
                    ?>


                     <div class="col-md-12">
                     <div class="col-md-4  pt-3  " >    
                      
                              <a href="?chitiet=<?php echo $tintuc['matintuc']; ?>">
                                      <img class="img-responsive" src="<?php echo './img/' . $tintuc['image'] . '?time=' . time() . ' />'; ?>" alt="">
                                  </a>           
                                   
                    </div>            
                      <div class="col-md-6 " >
       
                       <span style="color: #228B22"><h4><?php echo $tintuc['title']; ?></h4></span>
                          
                           <span style="color: #191919"><p><?php echo $tintuc['mota']; ?></p></span>
                            <span style="color: #5f00bf"><p>#Tag: <?php echo $tintuc['tag']; ?></p></span>
                         <div > 
                             <a class="btn btn-primary" 
                              href=
                            "?chitiet=<?php echo $tintuc['matintuc']; ?>">
                          Xem thêm  
                          <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>    
                       </div>
                      </div>
                    <?php
                    }
                    ?>                       
                      
                </div>
             </div>
        </div>
    </div>
 </div>
 <?php include 'views/shares/footer.php'; ?>