<?php foreach ($blog->result() as $b) {?>
<body>
   
    <?php
    
    $role = $this->session->userdata('role');

    if ($role == 0) {
       include 's_admin.php';
    }else{
        include 's_user.php';
    }
    }
    ?>
        