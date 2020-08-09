
            <main class="dash-content" >
                <div class="container-fluid">
                   
                     <div class="row">
                        <div class="col-xl-12">
                             <a href="<?php echo base_url()?>admin/artikel" class="btn btn-primary"><i class="fas fa-plus"></i>  Kembali</a> <a href="<?php echo base_url()?>admin/kategori" class="btn btn-secondary"><i class="fas fa-list"></i>  Kategori</a><br><br>
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Tambah Artikel </div>
                                </div>
                                <div class="card-body ">
                                    <?php echo form_open_multipart('');?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Judul</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Judul Artikel" name="judul">

                                                <input type="hidden" name="penulis" value="<?php echo $this->session->userdata('nama')?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Kategori</label>
                                                <select id="inputState" class="form-control" name="kategori">
                                                    <?php foreach ($kat->result() as $k) { ?>
                                                    <option value="<?=$k->kategori?>"><?=$k->kategori?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Foto</label>
                                            <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St" name="foto">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Konten</label>
                                             <textarea id="summernote" name="konten"></textarea>
                                        </div>
                                      
                        
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
