<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <style>
        body {
            background-image: url("<?php echo base_url(); ?>/assets/img/bg.jpg");
            background-position: center;
            /* background-repeat: no-repeat; */
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <form action="<?php echo base_url(); ?>index.php/auth/register" method="post">
        <h2>LOGIN YUK</h2>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" required>

        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="password" required>

        <label>Telp.</label>
        <input type="text" name="telp" placeholder="Telp" required>

        <label>Alamat</label><br>
        <textarea name="alamat" style="margin-left:15px;" cols="57" rows=10></textarea><br>

        <label>Kode Pos</label>
        <input type="text" name="kode_pos" placeholder="Kode Pos" required>

        <a href="<?php echo base_url(); ?>index.php/auth/login">Login</a>
        <button type="submit">Register</button>
    </form>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</body>

</html>
<script>
    <?php if($this->session->flashdata('success')){ ?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php }else if($this->session->flashdata('error')){  ?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php }else if($this->session->flashdata('warning')){  ?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php }else if($this->session->flashdata('info')){  ?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php } ?>
</script>