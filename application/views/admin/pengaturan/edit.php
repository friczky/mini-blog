
            <main class="dash-content" >
                <div class="container-fluid">
                   
    <?php
    
    $role = $this->session->userdata('role');

    if ($role == 0) {
       include 'view.php';
    }else{
        echo "ANDA TIDAK MEMPUNYAI HAK UNTUK MENGAKSES HALAMAN INI" ;
    }
    
    ?>
</div>
</main>
                    