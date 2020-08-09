<?php 
include 'tree/head.php';
include 'tree/sidebar.php';
?>
    
    <div class="main-wrapper">
	   
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	<?php foreach($art->result() as $a) {?>
			    <div class="item mb-5">
				    <div class="media">
					    <img width="70px" class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" alt="image" >
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php echo base_url()?>blog/r/<?=$a->id_artikel?>/<?=$a->judul?>"><?=$a->judul?></a></h3>
						    <div class="meta mb-1"><span class="date">Publikasi <?=$a->waktu?></span><span class="comment"><a href="<?php echo base_url()?>blog/ks/<?=$a->kategori?>"><?=$a->kategori?></a></span></div>
						    <div class="intro"><?=substr($a->konten, 0,100)?></div>
						    <a class="more-link" href="<?php echo base_url()?>blog/r/<?=$a->id_artikel?>/<?=$a->judul?>">Baca lagi &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <?php }?>
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="<?php echo base_url()?>blog/semua">Semua<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	   
    
<?php include 'tree/js.php'; ?>
