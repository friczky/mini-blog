
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href=""><?php foreach($blog->result() as $b){ echo $b->nama ; } ?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<?php foreach($blog->result() as $b){?>
			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo base_url()?>uploads/images/<?=$b->foto?>" alt="image" >			
					
					<div class="bio mb-3"><?php echo substr($b->tentang, 0,100) ; } ?></a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
			            
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo base_url()?>"><i class="fas fa-home fa-fw mr-2"></i>Beranda <span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo base_url()?>blog/k"><i class="fas fa-bookmark fa-fw mr-2"></i>Kategori</a>
					</li>
					<!-- <li class="nav-item">
					    <a class="nav-link" href="<?php echo base_url()?>blog/tentang"><i class="fas fa-user fa-fw mr-2"></i>Tentang</a>
					</li> -->
				</ul>
				
				
			</div>
		</nav>
    </header>