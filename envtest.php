<?php
//getenv()で取得
$myenv = getenv('MYMESSAGE');
if (!empty($myenv)) {
  // 環境変数が空でなければ。
  echo 'MYMESSAGE ENV : $myenv';
} else {
  // 環境変数が空ならば
  echo 'MYMESSAGE ENV not Setting!';
}
?>
