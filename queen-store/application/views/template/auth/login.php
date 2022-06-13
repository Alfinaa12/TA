<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <style>
        body {
            background-image: url("<?php echo base_url(); ?>/assets/img/bg.jpg");
            background-position: center;
            background-size: cover;
            /* background-repeat: no-repeat;
             */
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <form action="<?php echo base_url(); ?>index.php/auth/login" method="post">
        <h2>LOGIN YUK</h2>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User name" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="password" required>

        <a href="<?php echo base_url(); ?>index.php/auth/register">Register</a>
        <button type="submit">Login</button>
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