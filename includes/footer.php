<div class="container_footer">
  <div class="footer">
    &copy;
    <?php echo DATE("Y"); ?> Къща за гости СВЕТИ НИКОЛА<br>
    <span class="small_text">&copy; 2023 <a target="_blank" href="https://www.linoart.com"
        title="Linoart - Graphic Design and Web Development Studio">Linoart - уеб-програмиране и дизайн</a></span>
  </div>
</div>

<?php

function getUserIP()
{
  $client = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote = $_SERVER['REMOTE_ADDR'];

  if (filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
  } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
    $ip = $forward;
  } else {
    $ip = $remote;
  }

  return $ip;
}
// IP logger
// $ip_addr = getUserIP();
// $page_uri = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $data = $ip_addr . '|' . date("Y-m-d H:i:s") . '|' . $page_uri . '' . PHP_EOL;
// $file = fopen('vis_log.txt', 'a+');
// fwrite($file, $data);
// fclose($file);
?>