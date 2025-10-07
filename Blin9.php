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
        public $emri;
        public $mbiemri;
    }
    $objekti=new A();
    $objekti ->emri = "Ari";
    $objekti ->mbiemri = "Hajdini";
    echo($objekti->emri." ".$objekti->mbiemri);
    echo("<hr>");

    $objekti=new A();
    $objekti ->emri = "Blin";
    $objekti ->mbiemri = "Krasniqi";
    echo($objekti->emri." ".$objekti->mbiemri);
    echo("<hr>");

    class B{
        public function a(){
            return "PHP is OOP programming language";
        }
    }
    $objekti2=new B();
    echo($objekti2->a());
    echo("<hr>");

    class C{
        public $emri;
        public $mbiemri;
        public function a(){
            return "Une jam ".$this->emri." ".$this->mbiemri;
        }
    }
    $objekti3=new C();
    $objekti3 ->emri = "Zana";
    $objekti3 ->mbiemri = "Hoti";
    echo($objekti3->a());
    echo("<hr>");

    class D{
        public $fakulteti;
        public $drejtimi;
        public $numri;
        public function b(){
            return "Fakullteti ".$this->fakulteti." ne drejtimin e ".$this->drejtimi." ka  ".$this->numri." student. ";;
        }
    }
    $objekti4=new D();
    $objekti4 ->fakulteti = "UBT";
    $objekti4 ->drejtimi = "shkencave kompjuterike";
    $objekti4 ->numri = "800";
    echo($objekti4->b());
    echo("<hr>");

    class E{
        public $lloji;
        public $tipi;
        public $viti;
        public $vendi;
        public $qmimi;
        public function c(){
            return "Vetura ".$this->lloji." dhe  ".$this->tipi." e prodhuar ne vitin  ".$this->viti." ne ".$this->vendi." ka qimimin ".$this->qmimi." Euro.";
        }
    }
    $objekti5=new E();
    $objekti5 ->lloji = "BMW";
    $objekti5 ->tipi = "Serie 3";
    $objekti5 ->viti = "2020";
    $objekti5->vendi = "Gjermani";
    $objekti5->qmimi ="23000";
    echo($objekti5->c());
    echo("<hr>");

    class G{
        public $lloji;
        public $tipi;
        public $viti;
        public $vendi;
        public $qmimi;
        public function d(){
            return "Vetura ".$this->lloji." dhe  ".$this->tipi." i prodhuar ne vitin  ".$this->viti." ne ".$this->vendi." ka qimimin ".$this->qmimi." Euro.";
        }
    }
    $objekti6=new G();
    $objekti6 ->lloji = "Lamborghini";
    $objekti6 ->tipi = "Aventador";
    $objekti6 ->viti = "2023";
    $objekti6->vendi = "Itali";
    $objekti6->qmimi ="550000";
    echo($objekti6->d());
    echo("<hr>");

    ?>
</body>
</html>