<?php
    use Yee\Managers\Controller\Controller;
    use Yee\Managers\CacheManager;
    use App\Models\SignUp\SignupModel;
    use App\Libraries\Mailer\Mailer;


class SignupController extends Controller
{
    /**
    * @Route('/signup')
    * @Name('signup.index')
    */
public function indexAction( )
{
    /** @var Yee\Yee $yee */
    $app = $this->getYee();
    $data = array(
    "page_title" => "Signup",
    "page_description" => "Signup page description",
    "page_keywords" => "signup, domain name",
    "db" => array (
    "level2" => "Su",
    "Level3" => "Sider"
    ),
    );

    $app->render('pages/signup.tpl', $data );
}
    /**
    * @Route('/signup2')
    * @Name('post.index')
    * @Method('post')
    */
public function postFunction( )
{

/** @var Yee\Yee $yee */
$app = $this->getYee();

$email      = $app->request()->post('email');
$password   = $app->request()->post('pass1');
$confPass   = $app->request()->post('pass2');
$signupModel = new SignupModel ( $email, $password, $confPass );


    if ( !$signupModel->validateEmail ( $email )) 
    {
    $error = "Invalid Email!" ;
    }
    elseif (!$signupModel->passCheck($password, $confPass))
    {
    $error = " Email is already in use. ";
    }

    if($signupModel->checkDB())
    {
    echo "Email already in Use";
    $app->render('pages/usedEmail.tpl');
    return;
    }
    if(!isset($error))
    {
    $signupModel-> register();
    echo "SingupSucc.tpl";

    $app-> render( 'pages/signupSuccess.tpl' , array());
        } else {
    $data =array( 'error' => $error );
    $app->render( 'pages/SignupError.tpl' , $data );
    }
    echo " <br> ";

    $data= array
    (
    'activationcode'=> $signupModel->activationcode     
    );


    $mailer= new Mailer("kampfer9244@gmail.com" , "kampfer92@abv.bg" , "mail_act" , $data , "Activate Account Here");
    $mailer-> buildEmail()-> sendEmail();
    $app->render('pages/signup.tpl', $data );
}
}
