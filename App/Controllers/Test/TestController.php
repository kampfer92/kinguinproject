<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Libraries\Mailer\Mailer;

class TestController extends Controller
{
    /**
     * @Route('/test')
     * @Name('test.index')
     */
    public function testAction()
    {
     $app=  $this->getYee();
     $data= array();
    // $mailer= new Mailer("kampfer9244@gmail.com","kampfer92@abv.com","mail_act",$data,"Activate Acc");
    // $mailer-> buildEmail()-> sendEmail();
     
    }

}

