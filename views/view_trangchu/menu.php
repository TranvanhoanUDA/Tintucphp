<div class="col-md-3 pt-3">
      <ul class="list-group" id="menu" >
          <li href="#" class="list-group-item menu1 active ">CHUYÊN MỤC TIN TỨC</li>
             <div>
                <?php foreach ($chuyen_muc as $key => $chuyenmuc) { ?>     
                 <li class="list-group-item"><a href="?tintuctheochuyenmuc=<?php echo $chuyenmuc['machuyenmuc']; ?>"><td>Tin Tức <?php echo $chuyenmuc['tenchuyenmuc']; ?></a>
                 </li>
                  <?php } ?>                  
             </div>
      </ul>
</div>