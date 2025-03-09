<?php
function mostRecent(string $text): string
{
 $words = array_filter(array: explode(separator: ' ', string: $text));

 if (empty($words)) {
  return '';
 }

 $wordCounts = array_count_values(array: $words);

 arsort(array: $wordCounts);

 $mostCommonWordCount = reset(array: $wordCounts);

 $mostCommonWords = array_keys(array_filter(array: $wordCounts, callback: function ($count) use ($mostCommonWordCount): bool {
  return $count === $mostCommonWordCount;
 }));

 return implode(separator: ' ', array: $mostCommonWords);
}

echo mostRecent(text: 'aaaaaa ggggh j jjj  gggggggg 12233344 1224523 hhhhh hhhhh hhhhh hhhhh'); // hhhhh