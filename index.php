
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Functions TASK</title>
</head>
<body>
    
</body>
</html>
<?php
echo "<h1 class='task-title'>
function task : </h1>";
//Q1 : 
//write a php function return any integer number plus 5 
echo "<h2>Q1</h2>"."<br>";

function plusFive($num){
return $num + 5 ; 
}
echo plusFive(5)."<br>";
echo plusFive(10)."<br>";
echo plusFive(11)."<br>";
// ========================================================================
echo" <hr>";
echo "<h2>Q2</h2>"."<br>";
//q2 
//write a php function to check if the string is grater than fixed number or not 
//function take  two parameters (string , number)
function isgreater($str , $num){
if(strlen($str)> $num){
    echo "str length is greater than number  "."<br>";
}
else if(strlen($str) < $num){
    echo "str length is smaller than number  "."<br>";
}
else {
    echo "str length is  equal  number  "."<br>";
}
}
echo" <pre>";
echo "
isgreater(`123456` , 6);
isgreater(`123456` , 5);
isgreater(`123456` , 10);"."<br>";

isgreater("123456" , 6);
isgreater("123456" , 5);
isgreater("123456" , 10);
// ========================================================================
echo" <hr>";
echo "<h2>Q3</h2>"."<br>";
//q3 
// even or odd 
function evenOrOdd($num){
if($num% 2 ==0){
    echo $num ." is even number "."<br>";
}
else{
    echo $num ." is odd number "."<br>";
}
}
echo "<pre>";
echo "
evenOrOdd(10);
evenOrOdd(1);
evenOrOdd(110);
evenOrOdd(15);"."<br>";
evenOrOdd(10);
evenOrOdd(1);
evenOrOdd(110);
evenOrOdd(15);
// ========================================================================
echo" <hr>";
echo "<h2>Q4</h2>"."<br>";
//q4
function dataIsValid($arr , $item){
for ($i=0; $i < count($arr) ; $i++) { 
    if($arr[$i] === $item){
        echo "is here "."<br>"; return;
    }
}
echo "not here"."<br>"; return;
}
$arr=[1,2,3 , "14"];
dataIsValid($arr , 14);
dataIsValid($arr , "14");
dataIsValid($arr , 1);

// ========================================================================
echo" <hr>";
echo "<h2>Q5</h2>"."<br>";
$str= "AAAA asd bbbb";
function replaceIt(&$str, $word , $new){
if(str_contains($str,$word)){
$str= str_replace($word,$new , $str)   ;
 return "done" . true;
}
else{
    return "false" .false;
}
}
echo replaceIt($str, "asd" , "ccc")."<br>";
echo $str;
// ========================================================================
echo" <hr>";
echo "<h2>Q6</h2>"."<br>";
function concatenateName($first , $last){
echo $first ." ".$last ."<br>"; return;
}
concatenateName("mohamed" , "karam");
concatenateName("Mohamed" , "Amr");
concatenateName("Fady" , "Soliman");


?>
