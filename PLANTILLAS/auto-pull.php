<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( './home/pi/script.sh');
  shell_exec( 'git clone https://github.com/joellpz/confid.git');
  //echo shell_exec('cat Comprovar.txt');
}
?>
hi
