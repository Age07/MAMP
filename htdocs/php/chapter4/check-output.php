<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['mail'])) {
    echo 'お買い得情報のメールを送らせていただきます。';
} else {
    echo 'お買い得中法のメールは送りません。';
}
?>
<?php require '../footer.php'; ?>
