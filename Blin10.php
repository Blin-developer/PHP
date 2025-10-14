<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo("<h1 style=text-align:center;>Classes and Objects</h1>");
    class A{
        public $city;
        public $citizens;
        public function __construct($city)
        {
            $this->city = $city;
            $this->citizens = 200000;
        }
        public function a(){
            return $this->city . "eshte qytet dhe ka ".$this->citizens." banore.";
        }
    }
    $obj1 = new A("Lipjan ");
    echo $obj1 -> a();
    echo("<hr>");
    $obj2 = new A("Prishtina ");
    $obj2->citizens = 500000;
    echo $obj2 -> a();
    echo("<hr>");

    class B{
        public $titulli;
        public $personazhi;
        public $zhanri;
        public function __construct($titulli,$personazhi,$zhanri)
        {
            $this->titulli = $titulli;
            $this->personazhi = $personazhi;
            $this->zhanri = $zhanri;
        }
        public function b(){
            return "Titulli i librit eshte".$this->titulli . "dhe personazhi kryesore eshte ".$this->personazhi." dhe zhanri i ketij filmi eshte ".$this->zhanri;
        }
        public function c(){
            return "Titulli i librit eshte".$this->titulli . "dhe autori eshte ".$this->personazhi." dhe zhanri i ketij filmi eshte ".$this->zhanri;
        }
    }
    $obj1 = new B(" Interstellar "," Matthew McConaughey "," Sci-fi/Adventure. ");
    echo $obj1 -> b();
    echo("<hr>");

    $obj2 = new B(" Zero to One "," Peter Thiel "," Motivational Enterpreneurship. ");
    echo $obj2 -> c();
    echo("<hr>");

    class C{
        public $personi;
        public $banka;
        public $depozita;
        public $terheqja;
        public $gjendja;
        public function __construct($personi,$banka,$depozita,$terheqja,$gjendja)
        {
            $this->personi = $personi;
            $this->banka = $banka;
            $this->depozita = $depozita;
            $this->terheqja = $terheqja;
            $this->gjendja = $gjendja;
        }
        public function d(){
            return $this->personi . " ne banken ".$this->banka." ka depozituar ".$this->depozita.",ka terhequr ".$this->terheqja." dhe gjendja e llogaris se tij eshte".$this->gjendja;
        }
    }
    $obj3 = new C("Blin"," NLB Bank "," 1000$ "," 2000$ "," 8000$.");
    echo $obj3 -> d();
    echo("<hr>");

       class D{
        public $numri;
        public function __construct()
        {
            $this->numri = 0;
        }
        public function shto(){
            $this->numri+=100;
        }
         public function zvogelo(){
            $this->numri-=50;
        }
    }
    $obj4 = new D(0);
    echo("Ju keni shtuar vleren e variavles numri:".$obj4->shto());
    echo("<hr>");
    echo("Ju keni shtuar vleren e variavles numri:".$obj4->zvogelo());
    echo("<hr>");

    class E{
        public $arreja;

        public function __construct()
        {
            $this->arreja = [29,86,142,18,5];
        }
        public function shuma(){
            $sum = array_sum($this->arreja);
            return $sum;
        }
    }
    $obj7 = new E();
    echo("Shuma e elementeve te matrices eshte:".$obj7->shuma());
    echo("<hr>");
    ?>

</body>
</html>