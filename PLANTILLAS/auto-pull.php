<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull' );
}
?>hi
