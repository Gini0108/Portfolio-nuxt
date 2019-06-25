<?php
function getYears($start, $end = null) {
  $start = new DateTime($start);
  $current = new DateTime($end);

  $diffrence = $current -> diff($start);
  return $diffrence -> y;
}

function getMonths($start, $end = null) {
  $start = new DateTime($start);
  $current = new DateTime($end);

  $diffrence = $current -> diff($start);
  return $diffrence -> m;
}

function getRandomImage($directory) {
  $files = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

  $image = $files[array_rand($files)];
  return $image;
}
?>
