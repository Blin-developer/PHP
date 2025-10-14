<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Numri{
        private $numri;
        public function setNumri($nr){
            $this-> numri = $nr;
        }
        public function getNumri(){
           return $this-> numri;
        }
    }
    $obj1= new Numri();
    $obj1 -> setNumri(28);
    echo "Numri i shenuar eshte: ". $obj1 -> getNumri();
    echo("<hr>");

    
    class Emri{
        private $emri;
        public function setEmri($nrr){
            $this-> emri = $nrr;
        }
        public function getEmri(){
           return $this-> emri;
        }
    }
    $obj2= new Emri();
    $obj2 -> setEmri("Blin Krasniqi.");
    echo "Une jam:". $obj2 -> getEmri();
    echo("<hr>");

    class Numri2{
        private $nr1;
        private $nr2;

        public function setNumri1($nr1,$nr2){
            $this -> nr1 = $nr1;
            $this -> nr2 = $nr2;
        }
        public function getNumri1(){
           return $this-> nr1;
        }
        public function getNumri2(){
           return $this-> nr2;
        }
    }
    $obj3= new Numri2();
    $obj3 -> setNumri1(20,100);
    echo "Vlera e numrit te pare eshte: ". $obj3 -> getNumri1()."<br>";
    echo "Vlera e numrit te dyte eshte: ". $obj3 -> getNumri2()."<br>";
    echo("<hr>");

    class Numri4{
        private $nr1;

        public function setNr($nr1){
            if($nr1 < 20){
                $this -> nr1 = "Vlera eshte me e vogel se 20";
            }
            elseif($nr1 == 20){
                $this -> nr1 = "Vlera eshte e barabarte me 20";
            }
            else{
                $this -> nr1 = "Vlera eshte me e madhe se 20";
            }
        }
        public function getNr(){
           return $this-> nr1;
        }
    }
    $obj5= new Numri4();
    $obj5 -> setNr(70);
    echo $obj5 -> getNr();
    echo("<hr>");

    class Numri5{
        private $emri;
        private $piket;

        public function setNr($emri,$piket){
            $this -> emri = $emri;
            if($piket < 50){
                $this -> piket = ($this->emri."Nuk e kalon provimin");
            }
            
            else{
                $this -> piket = ($this->emri." e kalon provimin.");
            }
        }
        public function getNr(){
           return $this-> emri;
        }
        public function getNr1(){
           return $this-> piket;
        }
    }
    $obj6= new Numri5();
    $obj6 -> setNr("Blin",60);
   
    echo $obj6 -> getNr1();
    echo("<hr>");

    ?>
</body>
</html>