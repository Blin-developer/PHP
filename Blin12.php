<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class A{
        public $name;
        public $surname;

        public function __construct($name,$surname)
        {
            $this->name =$name;
            $this->surname =$surname;
        }
        public function a(){
            return "Une jam: ".$this->name." dhe mbiemri im eshte: ".$this->surname;
        }
    }
    $obj1 = new A("Blini","Krasniqi");
    echo $obj1 -> a();
    echo("<hr>");

    class G{
        private $emri;
        private $llogaria;

        public function setEmri($emri){
            $this->emri =$emri;
        }
        public function setLlogaria($llogaria){
            if($llogaria >= 0 ){
                $this->llogaria = $llogaria;
            }
            
            else{
                echo "Vlera e llogarise nuk mund te jete me vlere negative";
            } 
        }      
        public function getEmri(){
           return $this-> emri;
        }
        public function getLlogaria(){
           return $this-> llogaria;
        }
    }
    $obj2= new G();
    $obj2 -> setEmri("Blin");
    $obj2 -> setLlogaria(1000);
    echo "Emri i llogarise: ". $obj2 -> getEmri()."<br>";
    echo "Vlera e llogarise tuaj eshte: ". $obj2 -> getLlogaria()."<br>";
    echo("<hr>");


    class Prindi{
        public $city;
    }
    class Femija extends Prindi{
        public $state;
    }
    $obj3 = new Femija();
    echo $obj3 -> city = "Lipjani<br>";
    echo $obj3 -> state = "Kosova<br>";
    echo("<hr>");

    class Nipi extends Femija{
        public $rruga;
    }
    $obj4 = new Nipi();
    echo $obj4 -> city = "Lipjani<br>";
    echo $obj4 -> state = "Kosova<br>";
    echo $obj4 -> rruga = "Sinan Vitija<br>";
    echo("<hr>");

    class Klasa3{
        public function metoda(){
            return "Inheritanca ne klasen Klasa3<br>";
        }
    }

    class Klasa4 extends Klasa3{
        public function metoda2(){
            return "Inheritanca ne klasen Klasa4";
        }
    }
    $obj5 = new Klasa4();
    echo $obj5 -> metoda();
    echo $obj5 -> metoda2();
    echo("<hr>");

    class Klasa5{
        public function metoda1(){
            return "Kodi origjinal ne metoden te klasa5";
        }
    }

    class Klasa6 extends Klasa5{//Overriding- Rishkrimi i metodave
        public function metoda1(){
            return "Kodi i ndryshuar ne klasen Child";
        }
    }
    $obj6 = new Klasa6();
    echo $obj6 -> metoda1();
    echo("<hr>");

    class Klasa7{
        public $a = "Publike";
        protected $b = "E mbrojtur";
        private $c ="Private";

        public function metodaa(){
            echo $this-> a."-".$this->b."-".$this->c;
        }
    }

    class Klasa8 extends Klasa7{
        public function metodaa2(){
            echo $this->a;
            echo $this->b;
        }
    }    
    $obj7 = new Klasa8();
    echo $obj7->metodaa();
    echo("<br>");
    echo $obj7->metodaa2();
    echo(" <br>");
    ?>
</body>
</html>