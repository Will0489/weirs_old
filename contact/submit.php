<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$submit = false;

    $emails = [
        'William'   => '<williamblommaert@gmail.com>',
    ];

    if(!empty($_POST['character']) && empty($_POST['validation'])) {
        $submit = true;

        $client = new \Http\Adapter\Guzzle6\Client();
        $mailgun = new Mailgun('key-926e9bfdce63c30c5e9dc39e2ff60632', $client);
        $domain = 'weirswalkies.co.uk';

        try {
            $email_result = $mailgun->sendMessage("$domain",
                array(
                    'from' => "'No-reply' <no-reply@weirswalkies.co.uk>",
                    //'to' => "'Nina' <preserveprotect@yahoo.co.uk>",
                    'to' => "'William' <williamblommaert@gmail.com>",
                    'subject' => 'New form submission!',
                    'text' => $body,
                ));
        } catch (Exception $e) {
            $submit = false;
            $error = $e->getMessage();
        }
    } else {
        $submit = false;
    }
?>