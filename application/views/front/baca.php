 <?php 

include 'tree/sidebar.php';
?>
  <div class="main-wrapper">
	    <?php foreach($art->result() as $a ){?>
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
		    	<a href="<?php echo base_url()?>blog" class="btn btn-primary"><i class="arrow-prev fas fa-long-arrow-alt-left"></i> Kembali</a><hr>
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?=$a->judul?></h2>
				    <div class="meta mb-3"><span class="date">Publikasi : <?=$a->waktu?></span><span class="comment"><a href="<?php echo base_url()?>blog/ks/<?=$a->kategori?>"><?=$a->kategori?></a></span> <span class="date"> Penulis : <?=$a->penulis?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <img class="img-fluid" width="100%" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" alt="image">
				        <br>
				 <?=$a->konten?>
				   
			    </div>
				     <?php }?>
			   
				<hr>
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    (function() {
					        var d = document, s = d.createElement('script');
					        s.src = 'https://<?php foreach($blog->result() as $b){ echo $b->disqus;} ?>.disqus.com/embed.js';
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	   
	 


    <?php include 'tree/js.php';?>