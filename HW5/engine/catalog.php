<?php

function getCatalog()
{
    $sql = "SELECT * FROM catalog";
    $catalog = getAssocResult($sql);
    return $catalog;
}