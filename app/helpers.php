<?php
// test helper
// function testHelper()
// {
//   echo 'hi helper is working fine ';
// }

function productImage($path)
{
  return ($path != null) && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}
?>
