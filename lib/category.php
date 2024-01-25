<?php

function getCAtegories(PDO $pdo)
{
    $sql = 'SELECT * FROM categories';
    $query = $pdo->prepare($sql);

    $query->execute();
    return $query->fetchAll();
}
