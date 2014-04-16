<?
//---------
//  CORE
//---------

class core(&$user,&$obj){

  // var  -----------------------------------------
  public id=0;
  public name='';
  public author=0;
  public born=0;

  public coordinates=object('x'=>0,'y'=>0,'z'=0);

  //------------------------------------------------/
  
  // First Initialization
  public function __construct(){
    if (empty($obj)) 
      $this->init();
    else 
      $this->set($obj);
  }
  
  public function init(){
    /*$this->id=environment::insert_core();
    $this->author=$user->get_id();*/
    $this->born=date('y-m-d h:i:s');
  }
  
  public function set(&$obj){
    //$this->born=$obj->born;
    echo 'set_object';
  }
  
  public function info(){
     echo '<pre>';
     print_r($this);
     echo '</pre>';
  }

}

