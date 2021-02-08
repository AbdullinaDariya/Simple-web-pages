<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Задание 11 Абдуллина ПИ18-1</p>
<P><B>Список покупок</B></p>



<?php

class ListPurchase
{

    private $list_p="";


    public function __construct(array $list_p)
    {

        $this->list_p = $list_p;
    }

    public function sumPrice()
    {
        $comment="Общая сумма покупок: ";
        $res=0;
        $list_p=$this->list_p;
        foreach ($list_p as $purchase){
            $price=explode(",",$purchase);
            $res+=$price[2];
            
            
        }
        $comment.=(string)$res;
        return $comment;
         
    }
    public function allPurchase()
    {
        $list_p=$this->list_p;
        return $list_p;
         
    }
    public function expensivePurchase()
    {
        $list_p=$this->list_p;
        $k_exp=0;
        $comm="Количество дорогих покупок(цена больше 8000): ";
        foreach ($list_p as $p){
            $price=explode(",",$p)[2];
            if ($price>8000) {
                $k_exp+=1;
            }
        }
        $comm.=(string)$k_exp;
        return $comm;


    }
}

$purch=$_GET["purchases"];
$purch_str=explode(";",$purch);


$familyPurchase=new ListPurchase($purch_str);
print_r($familyPurchase->allPurchase());

echo "<br><br>";
print($familyPurchase->sumPrice());
echo "<br><br>";
print($familyPurchase->expensivePurchase());

?>
</body>
</html>