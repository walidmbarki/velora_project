<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/db.php';

function is_logged_in(): bool {
    return isset($_SESSION['user']);
}

function current_user(): ?array {
    return $_SESSION['user'] ?? null;
}

function user_is_admin(): bool {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

function require_login(): void {
    if (!is_logged_in()) {
        header("Location: ../login.php");
        exit;
    }
}

function require_admin(): void {
    if (!user_is_admin()) {
        http_response_code(403);
        echo 'Forbidden: admin only';
        exit;
    }
}