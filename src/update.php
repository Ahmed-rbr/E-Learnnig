<?php
session_start();
$error = '';
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $sexe     = $_POST['sexe'] ?? '';
    $avatar   = $_POST['avatar'] ?? '';
    $bg       = $_POST['background'] ?? '';
    $id       = $_POST['id'] ?? '';

    if (empty($username) || empty($sexe) || empty($avatar) || empty($bg)) {
        $error = 'You must fill all fields.';
    }

    if (empty($error)) {
        try {
            $query = 'UPDATE users SET username = :username, avatar = :avatar, background = :bg, sexe = :sexe WHERE id = :id';
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':username' => $username,
                ':avatar' => $avatar,
                ':bg' => $bg,
                ':sexe' => $sexe,
                ':id' => $id
            ]);

            $_SESSION['user']['username'] = $username;
            $_SESSION['user']['avatar'] = $avatar;
            $_SESSION['user']['background'] = $bg;
            $_SESSION['user']['sexe'] = $sexe;

        } catch (PDOException $e) {
            error_log('Failed to update user: ' . $e->getMessage());
            $error = 'Something went wrong.';
        }
    }

    $_SESSION['error'] = $error;
    header('Location: profile.php');
    exit;
}
