
            <main class="dash-content" >
                <div class="container-fluid">
                   
                     <div class="row">
                        <div class="col-xl-12">
                             <a href="<?php echo base_url()?>admin/user" class="btn btn-primary"> Kembali</a><br><br>
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Tambah Pengguna </div>
                                </div>
                                <div class="card-body ">
                                   <?php echo form_open_multipart('');?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Nama</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="nama">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Username</label>
                                                 <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label for="inputEmail4">Password</label>
                                                <input type="password" class="form-control" id="inputEmail4" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Email</label>
                                                 <input type="text" class="form-control" id="inputEmail4" placeholder="Email Valid" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Foto</label>
                                                <input type="file" class="form-control" id="inputEmail4" placeholder="Judul Artikel" name="foto">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Role</label>
                                                 <select class="form-control" id="inputEmail4" name="role">
                                                     <option value="1">Admin</option>
                                                     <option value="2">Penulis</option>
                                                 </select>
                                            </div>
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
