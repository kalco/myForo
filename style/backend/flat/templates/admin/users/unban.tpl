
<div class="head"><a href="{$home}{$panel}">Административная панель</a> / <a href="{$home}{$panel}/users">Пользователи</a> / {$title2}</div>
<div class="fon">
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите разбанить данного пользователя?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
</div>


{*
<div class="modal fade" id="liftban">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h5 class="modal-title">Unban {$title2}</h5> </div>
                            <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-12">
                                     <form action="{$url}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
 
                            <div class="modal-footer"><a href="#" onclick="return confirm('К сожалению, в демо заблокирована данная опция!')" class="btn btn-info"> Добавить</a> </div>
                          </form>                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                </div>
                </div>
                </div>*}
