<?php
    use Yee\Managers\Controller\Controller;
    use Yee\Managers\CacheManager;
    use App\Models\AjaxModel\AjaxLoginModel;

class AjaxController extends Controller   
{
    /**
    * @Route('/ajax/login')
    * @Name('ajaxLogin.index')
    * @Method('POST')
    */
public function ajaxLogin( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $baseUrl    = Yee\Yee::getDefaultSettings();
        $email      = $app->request()->post('email');
        $password   = $app->request()->post('password');
        $ajax       = new AjaxLoginModel($email,$password);
        
        if (!$ajax->validate())
        {
            $error= "Failed to join, please check you pass/email";
        }
        if(isset($error))
        {
            $data = array(
                "title"         => "AjaxControlFail",
                'errorMessage'  => $error,
                'error'         => true,
                //'homePageUrl'   => $baseUrl['http://localhost/home'],
            );
            echo json_encode($data);
        }else {
            $data = array(
                "title"         => "AjaxConSucc",
                'succ'          => "Hello, $email",
                'error'         => false,
                'success'       => true,
                //'homePageUrl'   => $baseUrl['http://localhost/home']
            );
            echo json_encode($data);
        }
    }
}

