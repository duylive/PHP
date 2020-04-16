<?php

include_once('linklist.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$linkedList->deleteNode(43);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo "Elements: " . $totalNodes . "<br/>";
echo implode ('-' , $linkData);
