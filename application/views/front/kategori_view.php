<?php 
include 'tree/head.php';
include 'tree/sidebar.php';
?>
    
    <div class="main-wrapper">
	   
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">

		    	<h2>Hasil dari kategori : <?php echo $kat?></h2><hr><br>
		    	
		    	<?php foreach($art->result() as $a) {?>
			    <div class="item mb-5">
				    <div class="media">
					    <img width="70px" class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" alt="image" >
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php echo base_url()?>blog/r/<?=$a->id_artikel?>/<?=$a->judul?>"><?=$a->judul?></a></h3>
						    <div class="meta mb-1"><span class="date">Publikasi <?=$a->waktu?></span><span class="time"><a href="<?php echo base_url()?>blog/ks/<?=$a->kategori?>"><?=$a->kategori?></a></span></div>
						    <div class="intro"><?php foreach($blog->result() as $b){ echo substr($b->tentang, 0,100) ; } ?></div>
						    <a class="more-link" href="<?php echo base_url()?>blog/r/<?=$a->id_artikel?>/<?=$a->judul?>">Baca lagi &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <?php }?>
			    
			   
				
		    </div>
	    </section>
	    
    
<?php include 'tree/js.php'; ?>
