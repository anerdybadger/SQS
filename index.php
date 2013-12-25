<pre>
<?php
include 'lib/db.class';
include 'lib/match.class';
define('user','root');
define('password','root');
define('FORUM_PREFIX','sqds_');
try {
$test = new match(3,5,1,1,1,1,1,1);
echo $test->match_id;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
</pre>