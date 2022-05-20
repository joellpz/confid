<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( '/./var/www/script.sh');
  //echo shell_exec('cat Comprovar.txt');
}
?>
hia
