<?php
    use Yee\Managers\Controller\Controller;
    use Yee\Managers\CacheManager;
    
   

class LoginController extends Controller
{
     /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $javascript = array(
           "/js/login.js"             
        );
        $data = array (
          "javascript" => $javascript, 
        );
        $app->render('pages/login.tpl', $data );
    }
}