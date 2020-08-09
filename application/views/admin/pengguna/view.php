
            <main class="dash-content" >
                <div class="container-fluid">
                    <a href="<?php echo base_url()?>admin/user_tambah" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pengguna</a> <br><br>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>                        
                            <tr align="center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr></thead>

                        <?php  $no =1 ;foreach ($art->result() as $a) { ?>
                        <tr align="center">
                            <td><?php echo $no++?></td>
                            <td><img width="70px" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>"></td>
                            <td><?=$a->nama?></td>
                            <td><?=$a->username?></td>
                            <td><?=$a->password?></td>
                            <td><?=$a->email?></td>
                            <td><a href="<?php echo base_url()?>admin/user_edit/<?=$a->id_user?>" class="btn btn-primary"><i class="fas fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/user_hapus/<?=$a->id_user?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?}?>
                    </table>
                </div>
            </main>
        </div>
    </div>
