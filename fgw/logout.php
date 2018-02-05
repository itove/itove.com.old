<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

session_name('SID');
session_start();
session_unset();
session_destroy();

header("Location: /fgw");
exit;
