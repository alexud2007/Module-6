<?php

$textStorage = array();

function addText(string $title, string $text, &$textStorage)
{
    $textStorage[] = array(
        'title' => $title,
        'text' => $text
    );
}

function remove(int $index, &$textStorage) {
    if (isset($textStorage[$index])) {
        unset($textStorage[$index]);
        return true;
    } else {
        return false;
    }
}

addText('My first text', 'This is my first text', $textStorage);
addText('My second text', 'This is my second text', $textStorage);

remove(0, $textStorage); // true
remove(5, $textStorage); // false

print_r($textStorage);