<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomeController extends Controller
{
     /**
     * @Route('/')
     * @Name('home.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
		"page_title"=>"Home Page",
                "page_description"=>"home page description",
                "page_keywords"=>"home page,domain name",
                "db"=>array(
                    "level2"=>"Su",
                    "Level3"=>"Sider"
        
                )
	);
        
        $app->render('pages/home.tpl', $data );
    }
    
}
