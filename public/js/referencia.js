$('#modalBorrar').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget);
    var id = button.data('id');
    var codigo= button.data('codigo');

    var modal=$(this);
    modal.find('.modal-footer #id').val(id);
    modal.find('.modal-body #codigo').text(codigo);
    modal.find('.modal-body #descripcion').text(descripcion);
});
$('#modalEditar').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget);
    var id = button.data('id');
    var codigo= button.data('codigo');
    var descripcion = button.data('descripcion');

    var modal=$(this);
    modal.find('.modal-footer #id_marca').val(id);
    modal.find('.modal-body #codigo').val(codigo);
    modal.find('.modal_body #descripcion').val(descripcion);
});
