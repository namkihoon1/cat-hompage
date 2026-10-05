<?php

// SQLite 데이터베이스 연결
try {
    $db = new SQLite3('cat_homepage.db');
} catch (Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}
