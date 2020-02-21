<?php
    include("block.php");         
    $genesisTransaction = ["a envia 11 bitcoins para b","b envia 44 bitcoins para c"];
    $genenisBlock = new Block(0, $genesisTransaction);
    $block1Transaction = ["a envia 11 bitcoins para b","b envia 44 bitcoins para c"];
    $block1 = new Block($genenisBlock->getBlockHash(), $block1Transaction);
    $block2Transaction = ["a envia 11 bitcoins para b","b envia 44 bitcoins para c"];
    $block2 = new Block($block1->getBlockHash(), $block2Transaction);
    echo "Genesis Block:".$genenisBlock->getBlockHash();
    echo "<br/>Bloco 1: ".$block1->getBlockHash();
    echo "<br/>Bloco 2: ".$block2->getBlockHash();
?>