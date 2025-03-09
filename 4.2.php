<?php
function isPerfectNumber(int $N): bool
{
 $sum = 0;

 for ($i = 1; $i < $N; $i++) {
  if ($N % $i === 0) {
   $sum += $i;
  }
 }

 return $sum === $N;
}

$N = 496;

if (isPerfectNumber(N: $N)) {
 echo "Идеальное число";
} else {
 echo "Не идеальное число";
}
