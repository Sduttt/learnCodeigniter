<?php

$config = array(
    array(
        'field' => 'uname',
        'label' => 'Username',
        'rules' => 'required|trim|min_length[5]|max_length[10]|alpha_numeric',
        'errors' => array(
            'required' => 'You must provide a %s.',
            'min_length' => 'The %s must be at least 5 characters long.',
            'max_length' => 'The %s must not exceed 10 characters.',
            'alpha_numeric' => 'The %s must contain only alpha-numeric characters.',
        ),
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|trim|min_length[5]|max_length[30]|valid_email',
        'errors' => array(
            'required' => 'You must provide an %s.',
            'min_length' => 'The %s must be at least 5 characters long.',
            'max_length' => 'The %s must not exceed 30 characters.',
            'valid_email' => 'The %s must be a valid email address.',
        ),
    ),
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|trim|min_length[6]|max_length[10]',
        'errors' => array(
            'required' => 'You must provide a %s.',
            'min_length' => 'The %s must be at least 6 characters long.',
            'max_length' => 'The %s must not exceed 10 characters.',
        ),
    ),
    // array(
    //     'field' => 'picture',
    //     'label' => 'Image',
    //     'rules' => 'required',
    //     'errors' => array(
    //         'required' => 'You must provide a %s.',
    //         // 'min_length' => 'The %s must be at least 6 characters long.',
    //         // 'max_length' => 'The %s must not exceed 10 characters.',
    //     ),
    // ),
);

$config['error_prefix'] = '<div class="text-danger">';
$config['error_suffix'] = '</div>';
