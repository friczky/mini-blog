<?php 
include 'tree/head.php';
include 'tree/sidebar.php';
?>
    
    <div class="main-wrapper">
	   
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	
				<div class="row"><?php foreach($kat->result() as $k) {?>
					  <div class="col-sm-6">
					    <div class="card">
					      <div class="card-body">
					        <h5 class="card-title"><?=$k->kategori?></h5>
					        <p class="card-text" align="justify">Pilih kategori ini untuk memudahkan antum mendapatkan informasi tentang <?=$k->kategori?> sehingga lebih fokus dan tidak membuat antum bingung tentang informasi yang ada.</p>
					        <a type="submit" href="<?php echo base_url()?>blog/ks/<?=$k->kategori?>" class="btn btn-primary">Lihat</a>
					      </div>
					    </div>
					  </div><?}?>
					</div>
		    	
				
		    </div>
	    </section>
	    
	
    
<?php include 'tree/js.php'; ?>
