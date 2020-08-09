 <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="<?php echo base_url()?>admin" class="easion-logo"><i class="fas fa-coffee"></i> <span><?=$b->nama ?></span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="<?php echo base_url()?>admin" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-edit"></i> Artikel </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url()?>admin/artikel" class="dash-nav-dropdown-item">Artikel</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url()?>admin/artikel_tambah" class="dash-nav-dropdown-item">Tambah Artikel</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url()?>admin/kategori" class="dash-nav-dropdown-item">Kategori</a>
                    </div>
                </div>

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-users"></i>Penguna</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url()?>admin/user" class="dash-nav-dropdown-item">List User</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url()?>admin/user_tambah" class="dash-nav-dropdown-item">Add User</a>
                    </div>
                </div>
                
                <a href="<?php echo base_url()?>admin/pengaturan" class="dash-nav-item">
                    <i class="fas fa-cog"></i> Pengaturan </a>
        </div>