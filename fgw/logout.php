<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

session_start(['name' => 'SID']);
session_unset();
session_destroy();

header("Location: $root");
exit;
