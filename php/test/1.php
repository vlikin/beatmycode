<?php
$subject = 'A Text <b>in bold</b> with <a href="/nextPage.php" title="next >Link" rel="/elsewhere.html">some content <img src="/images/default/next.png" style="extrawide" /></a>
<div class="box">5 px</div><a href="/zoo.php" title="Zoo"> Link to zoo <img src="/images/default/zoo.png" /></a> bla bla ';


$pattern = '~(<a.*?)(title=)(([\'"])([^\'"]*)(\4))([^>]*>)([^<]*)'
    . '(<img .*)(src=[\'"][^\'"]*[\'"])(.*?/>[^<]*</a>)~';
$replacement = '\1\2\3\7\8\9\10 alt="\5" \11';
$result = preg_replace($pattern, $replacement, $subject);
print $subject . chr(10);
print $result . chr(10);
