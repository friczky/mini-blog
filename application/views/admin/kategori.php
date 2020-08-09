<?php 

include 'tree/head.php';
include 'tree/sidebar.php';
include 'tree/navbar.php';

?>
            <main class="dash-content" >
                <div class="container-fluid">
                   
                     <div class="row">
                        <div class="col-xl-12">
                            <a href="<?php echo base_url()?>admin/artikel" class="btn btn-primary"><i class="fas fa-plus"></i>  Kembali</a>  <a href="<?php echo base_url()?>admin/artikel_tambah" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Artikel</a><br><br>
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title">  Tambah Kategori </div>
                                </div>
                                <div class="card-body ">
                                    <form method="post" action="">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Kategori</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Judul Artikel" name="kategori"> 
                                                <br><button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>                        
                            <tr align="center">
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr></thead>
                        <?php  $no =1 ;foreach ($kat->result() as $a) { ?>
                        <tr align="center">
                            <td><?php echo $no++?></td>
                            <td><?=$a->kategori?></td>
                            <td><a href="" class="btn btn-primary"><i class="fas fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/kategori_hapus/<?=$a->id?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?}?>
                    </table>
            </main>
        </div>
    </div>
<?php 

include 'tree/js.php';
?>