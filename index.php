<?php

$textStorage = array();

function addText(string $title, string $text, &$textStorage)
{
    $textStorage[] = array(
        'title' => $title,
        'text' => $text
    );
}

addText('My first text', 'This is my first text', $textStorage);
addText('My second text', 'This is my second text', $textStorage);

print_r($textStorage);