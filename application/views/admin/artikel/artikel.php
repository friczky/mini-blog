
            <main class="dash-content" >
                <div class="container-fluid">
                    <a href="<?php echo base_url()?>admin/artikel_tambah" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Artikel</a> <a href="<?php echo base_url()?>admin/kategori" class="btn btn-secondary"><i class="fas fa-list"></i>  Kategori</a><br><br>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>                        
                            <tr align="center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Aksi</th>
                        </tr></thead>

                        <?php  $no =1 ;foreach ($art->result() as $a) { ?>
                        <tr align="center">
                            <td><?php echo $no++?></td>
                            <td><img width="50px" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" ></td>
                            <td><?=$a->judul?></td>
                            <td><?php echo substr($a->konten, 0,50)?></td>
                            <td><?=$a->kategori?></td>
                            <td><?=$a->penulis?></td>
                            <td><a href="<?php echo base_url()?>admin/artikel_edit/<?=$a->id_artikel?>" class="btn btn-primary"><i class="fas fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/artikel_hapus/<?=$a->id_artikel?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?}?>
                    </table>
                </div>
            </main>
        </div>
    </div>
