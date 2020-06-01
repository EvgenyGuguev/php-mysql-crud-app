<!-- EDIT MODAL -->
<div class="modal fade" id="editModal<?=$value['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action="?id=<?=$value['id'] ?>" method="post">
                        <div class="form-group" >
                            <input type="text" class="form-control" name="edit_name" placeholder="имя">
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" name="edit_last_name" placeholder="фамилия">
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" name="edit_pos" placeholder="должность">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="edit_submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <form action="?id=<?=$value['id'] ?>" method="post">
                    <button type="submit" name="delete_submit" class="btn btn-primary">Удалть</button>
                </form>

            </div>
        </div>
    </div>
</div>