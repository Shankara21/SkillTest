<?php
function rambuLaluLintas()
{
  static $index = 0;
  $colors = ['Merah', 'Kuning', 'Hijau'];

  $currentColor = $colors[$index];

  $index++;

  if ($index >= count($colors)) {
    $index = 0;
  }

  return $currentColor;
}

echo rambuLaluLintas() . "\n";
echo rambuLaluLintas() . "\n";
echo rambuLaluLintas() . "\n";
echo rambuLaluLintas() . "\n";
