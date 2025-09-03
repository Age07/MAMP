<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['meal']) {
    case '和食':
        echo '焼き魚、煮物、味噌汁、ご飯';
        break;
    case '洋食':
        echo  'ジュース、オムレツ、ハッシュポテト、パン、コーヒー';
        break;
    case '中華':
        echo '春巻、餃子、卵スープ、チャーハン、杏仁豆腐';
        break;
}
echo 'を提供いたします';
?>
<form action="radio-input.php" method="post">
    <input type="submit" value="戻る">
</form>
<?php require '../footer.php'; ?>
