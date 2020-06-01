<?php
include 'func.php';
?>
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-1">
            <?=$success ?>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Действие</th>
                </tr>
                <?php foreach ($result as $value): ?>
                <tr>
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['name'] ?></td>
                    <td><?=$value['last_name'] ?></td>
                    <td><?=$value['pos'] ?></td>
                    <td>
                        <a href="?edit=<?=$value['id'] ?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id']?>" ><i class="fa fa-edit"></i></a>
                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id']?>" ><i class="fa fa-trash"></i></a>
                        <?php require 'modal.php'; ?>
                    </td>
                </tr>
                <?php endforeach ?>
                </thead>
            </table>

            <!-- Button trigger modal + FA Icon -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal">
                <i class="fa fa-user-plus"></i>
            </button>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить сотрудника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group" >
                        <input type="text" class="form-control" name="name" placeholder="имя">
                    </div>
                    <div class="form-group" >
                        <input type="text" class="form-control" name="last_name" placeholder="фамилия">
                    </div>
                    <div class="form-group" >
                        <input type="text" class="form-control" name="pos" placeholder="должность">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary"  name="submit">Добавить</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>