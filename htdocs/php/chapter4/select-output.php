<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['seat']) {
    case '指定席':
        echo '追加料金は1200円です。';
        break;
    case  'グリーン席':
        echo  '追加料金は2500円です。';
        break;
    default:
        echo  '追加料金はありません。';
        break;
}
?>
<form action="select-input.php" method="post">
    <input type="submit" value="戻る">
</form>
<?php require '../footer.php'; ?>
