<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <?php
                    $uname_attr = array('type' => 'text', 'class' => 'form-control', 'name' => 'uname', 'placeholder' => 'User Name', 'value' => set_value('uname'));

                    $email_attr= array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'placeholder' => 'Email', 'value' => set_value('email'));

                    $picture = array('type' => 'file', 'class' => 'form-control', 'name' => 'picture');

                    echo form_open_multipart('HomeController/formval');
                    echo form_input($uname_attr);
                    echo form_error('uname');
                    echo form_input($email_attr);
                    echo form_error('email');
                    echo form_password(['class' => 'form-control', 'placeholder' => 'password', 'name' => 'password']);
                    echo form_error('password');
                    echo form_input($picture);
                    // echo form_error('picture');

                    // echo form_submit(['value' => 'Submit', 'class' => 'btn btn-success mt-4 text-white' ]);
                    echo '<input type="submit" value="Submit" class= "btn btn-success mt-4 text-white" />';
                    echo form_close();

                ?>
            </div>
        </div>
    </div>
</body>

</html>