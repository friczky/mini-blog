
            <main class="dash-content" >
                <div class="container-fluid">
                   
    <div class="row">
                        <div class="col-xl-12">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Profile </div>
                                </div>
                                <div class="card-body ">
                                     <?php echo form_open_multipart('');?>
                                        <div class="form-row">
                                            <div align="center" class="form-group col-md-12"> <img class="rounded mx-auto d-block"  width="50%" src="<?php echo base_url()?>uploads/images/<?php echo $user['foto']?>"></div>
                                           
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Nama </label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="nama" value="<?php echo $user['nama']?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Username </label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="username" value="<?php echo $user['username']?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Email </label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="email" value="<?php echo $user['email']?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Password </label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="password" value="<?php echo $user['password']?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                 
                                                <label for="inputState">Foto Profile</label>
                                                 <i></i><input type="file" class="form-control" name="foto" value="<?php echo $user['foto']?>">
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

                    