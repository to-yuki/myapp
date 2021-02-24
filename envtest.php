<?php
//getenv()で取得
$myenv = getenv('MYMESSAGE');
if (!empty($myenv)) {
  // 環境変数が空でなければ。
  echo $myenv;
} else {
  // 環境変数が空ならば
  echo "MYMESSAGE env not Setting!";
}
?>
