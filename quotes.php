<?php

$quotes = [
  'It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.',
  "When you're curious, you find lots of interesting things to do.",
  "It is not our differences that divide us. It is our inability to recognize, accept, and celebrate those differences."
];

$authors = [
  'Leon C. Megginson',
  'Walt Disney',
  'Audre Lorde',
];

$index = rand(0,sizeof($quotes)-1);
$q = $quotes[$index];
$a = $authors[$index];
