<?php 
include 'tree/head.php';
include 'tree/sidebar.php';
include 'tree/navbar.php';
?>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                    SELAMAT DATANG : <?php echo $this->session->userdata('nama')?> <br><br>
                    </div>
                    </div>
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> Pengguna </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $this->db->count_all('users') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success ">
                                <h3 class="stats-title"> Artikel </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-pen"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $this->db->count_all('artikel') ?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Kategori </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-list"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $this->db->count_all('kategori') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php 
include 'tree/js.php';
?>