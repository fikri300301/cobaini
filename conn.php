<?php

$conn = new mysqli('localhost', 'root', '', 'rent_book');

if ($conn) {
    echo "ini berhasil";
}