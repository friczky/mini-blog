 <div class="row">
                        <div class="col-xl-12">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Pengaturan </div>
                                </div><?php foreach($blog->result() as $u) {?>
                                <div class="card-body ">
                                     <?php echo form_open_multipart('');?>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Nama Blog</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="nama" value="<?=$u->nama?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                 <img  width="20px" src="<?php echo base_url()?>uploads/images/<?=$u->logo?>"><br>
                                                <label for="inputState">Logo Favicon</label>
                                                 <i></i><input type="file" class="form-control" id="inputEmail4" placeholder="Username" name="logo" value="<?=$u->logo?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <img width="20px" src="<?php echo base_url()?>uploads/images/<?=$u->foto?>"><br>
                                                <label for="inputState">Foto Blog Front End</label>
                                                 <input type="file" class="form-control" id="inputEmail4" placeholder="Username" name="foto" value="<?=$u->foto?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Disqus Account</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="disqus" value="<?=$u->disqus?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputState">Tentang</label>
                                                 <textarea id="summernote" class="display" name="tentang"><?=$u->tentang?></textarea>
                                            </div>
                                    <?php } ?>
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
