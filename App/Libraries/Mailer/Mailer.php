<?php
namespace App\Libraries\Mailer;

class Mailer
{
    private $sender;
    private $reciever;
    private $template;
    private $data=array();
    private $htmlmessage;
    private $subject;


    public function __construct( $sender, $reciever, $template, $data, $subject ) 
    {
        
        $this->sender = $sender;
        $this->reciever = $reciever;
        $this->template = $template;
        $this->data = $data;
        $this->subject= $subject;
        return $this;
    }
    public function buildEmail()
    {
        $app= \Yee\Yee::getInstance();
        $app->view()->appendData( $this->data );
        $this->htmlmessage= $app->view()->render( 'emailsend/' . $this->template . '.tpl' );
        return $this;
    }
    public function sendEmail()
    {
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $headers .= "From:<" . $this->sender . ">" . "\r\n";
        mail( $this->reciever,  $this->subject, $this->htmlmessage, $headers );
        
    }
}