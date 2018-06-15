<?PHP

class Vehicle{ 
    public $name="";
    public $wheel=0;
    function display_info(){
        print "$this->name has $this->wheel wheels.".PHP_EOL;
    }
}

class Airplane extends Vehicle{
    function __construct(){
        $this->name="airplane";
        $this->wheel=2;
    }
    function fly(){
        print "$this->name is flyimg...".PHP_EOL;
    }
}

class Bike extends vehicle{
    function __construct(){
        $this->name="bike";
        $this->wheel=2;
    }
    function run(){
        print "$this->name is runnimg...".PHP_EOL;
    }
}

$airplane=new Airplane();
$bike=new Bike();


$airplane->display_info();
$bike->display_info();
?>

    
