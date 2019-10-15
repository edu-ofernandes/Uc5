$(document).ready(function(){
    $('a[data-confirm]').click(function (e) { 
        e.preventDefault();
        var href = $(this).attr('href');

        if(!$('#confirm-delete').length){
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header bg-danger"><h5 class="modal-title text-white" id="exampleModalCenterTitle">CONFIRME PARA EXCLUIR</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body text-center">Deseja realmente excluir o registro selecionado ?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo-alt"></i>CANCELAR</button><a type="button" class="btn btn-danger" id="data-confirmOK" href="Classes/DALAdmin.php"><i class="far fa-trash-alt"></i> EXCLUIR</a></div></div></div></div>');
        }
        $('#data-confirmOK').attr('href', href);
        $('#confirm-delete').modal({shown: true});
        return false;
    });

   

    
});