<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Customer Contacted',
    'email_message' => 'You  have recieved a new mail from Makos Infotech',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'example@email.com',
    'to' => 'fathima@makosinfotech.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Full Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Full Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>