<?php
function alphabeticalOrder(string $str): string
{
 $chars = str_split(string: $str);
 sort(array: $chars);
 return implode(separator: '', array: $chars);
}

$inputStr = 'edrkbnjkaebwjkebjk';
$result = alphabeticalOrder(str: $inputStr);
echo $result;
