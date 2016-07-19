<?php
namespace App\Models\activationModel;

class activationModel
{
    private $accode;

    public function __construct( $accode )
    {
        $app = \Yee\Yee::getInstance();
        $this->accode = $accode;
        
        $app-> db[ 'default' ]-> where ( 'activationcode' , $this->accode );
        $app-> db[ 'default' ]-> where ( 'active', 0 );
        
        $return = $app-> db[ 'default' ]-> getOne( 'users' );
            if ( NULL == $return )
            {
                return false;
            }
          return $return;
          
    }
    public function activeUser( $userData )
    {
        $app = \Yee\Yee::getInstance();
        
        $data= array 
        (
          'activationCode'=> '',
          'active'=> 1, 
        );
        $app->db[ 'default' ]-> where ( 'username' , $userData [ 'username' ]);
        $app->db[ 'default' ]-> update( 'users' ,$data);
        
    }
}