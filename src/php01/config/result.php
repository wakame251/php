<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name. '<br />';
if (isset($_POST['goods'])) {
    $goods = $_POST['goods'];
    print "ご希望商品は、".$goods.'<br />';
} else {
    echo "商品が選択されていません。";
}
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);
print "注文数は、" . $quantity ;