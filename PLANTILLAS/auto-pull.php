<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'cd /var/www/confid/ && git reset --hard HEAD && git pull' );
}?>
hi
