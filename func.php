<?php

require 'coonfigDB.php';

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$pos = $_POST['pos'];

// Create
if (isset ($_POST['submit'])) {
    $sql = "INSERT INTO crud(name, last_name, pos) VALUES(?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$name, $last_name, $pos]);
    $success =
    '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}

// Read
$sql1 = "SELECT * FROM crud";
$query1 = $pdo->prepare($sql1);
$query1->execute();
$result = $query1->fetchAll();

// Update
$edit_name = $_POST['edit_name'];
$edit_last_name = $_POST['edit_last_name'];
$edit_pos = $_POST['edit_pos'];
$get_id = $_GET['id'];

if (isset ($_POST['edit_submit'])) {
    $sql2 = "UPDATE crud SET name=?, last_name=?, pos=? WHERE id=?";
    $query2 = $pdo->prepare($sql2);
    $query2->execute([$edit_name, $edit_last_name, $edit_pos, $get_id]);
    header('Location: '. $_SERVER['HTTP_REFERER']);
}

// Delete

if (isset ($_POST['delete_submit'])) {
    $sql3 = "DELETE FROM crud WHERE id=?";
    $query3 = $pdo->prepare($sql3);
    $query3->execute([$get_id]);
    header('Location: '. $_SERVER['HTTP_REFERER']);
}