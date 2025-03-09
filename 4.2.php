<?php
function isPerfectNumber(int $number): bool
{
 $sum = 0;

 for ($i = 1; $i < $number; $i++) {
  if ($number % $i === 0) {
   $sum += $i;
  }
 }

 return $sum === $number;
}

$number = 496;

if (isPerfectNumber(number: $number)) {
 echo "Идеальное число";
} else {
 echo "Не идеальное число";
}
