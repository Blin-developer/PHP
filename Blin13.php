<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class BankAccount{//Encapsulimi-Mbrojtja e te dhenave
        private $gjendja =50;
        public function depozita($shuma){
            $this->gjendja += $shuma;
        }
        public function getGjendja(){
            return $this->gjendja;
        }
    }
    $acc = new BankAccount();
    $acc->depozita(100);
    echo "Gjendja e llogarise suaj pas depozitimit eshte: ".$acc->getgjendja()."EURO.";
    echo("<hr>");

    class Person{
        public $name;
        public function hello(){
            echo "Hello, une jam ".$this->name."<br>";
        }
    }

    class Student extends Person{
        public $nota;
        public function shfaq(){
            echo "Nota ime eshte ".$this->nota;
        }
    }
    $student = new Student();
    $student->name="Blin";
    $student->nota="10";
    $student->hello();
    $student->shfaq();
    echo("<hr>");

    class Lojtari{
        public function pozita(){
            echo "Pozicioni i lojtarit.<br>";
        }
    }

    class Sulmuesi extends Lojtari{
        public function pozita(){
            echo "Sulmuesi duhet te shenoje gola ne sulm.<br>";
        }
    }
    class Mbrojtesi extends Lojtari{
        public function pozita(){
            echo "Mbrojtesi duhet te mos lejoje kundershtarin te shenoje gol.<br>";
        }
    }
    $lojtaret = [new Lojtari(), new Sulmuesi(), new Mbrojtesi()];
    //$lojtaret[1]->pozita();
    foreach ($lojtaret as $a){
        $a->pozita();
    }
    echo("<hr>");

    //////////////////////////////////////////////////////////////
    //Klasa Abstrakte

    abstract class Vetura{
        abstract public function shpejtesia();
    }
    class Audi extends Vetura{
        public function shpejtesia()
        {
            echo "Audi levize me shpejtesi maksimale prej 320km/h.<br>";
        }
    }
    class BMW extends Vetura{
        public function shpejtesia()
        {
            echo "BMW levize me shpejtesi maksimale prej 340km/h.<br>";
        }
    }
    $veturat = [new Audi(), new BMW()];
    foreach ($veturat as $v){
        $v->shpejtesia();
    }
    echo("<hr>");

    interface Forma{
        public function perimetri();
    }
    class Katrori implements Forma{
        public $brinja;
        public function __construct($a)
        {
            $this->brinja = $a;
        }
        public function perimetri()
        {
            return 4 * $this->brinja;
        }
    }
    class Drejtkendeshi implements Forma{
        public $width,$height;
        public function __construct($w,$h)
        {
            $this->width = $w;
            $this->height = $h;
        }
        public function perimetri()
        {
            return $this->width * $this->height;
        }
    }
    $format = [new Katrori(3),new Drejtkendeshi(4,5)];
    foreach ($format as $forma){
        echo "Perimetri: ". $forma->perimetri()."cm<br>";
    }
    echo("<hr>");


    ?>
</body>
</html>