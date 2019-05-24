// ajax().
// Hidden Elements

// TODO: Ocultar Elementos
$('#madre_acudiente').click(function () {
    if ($('#padre_acudiente').parent()[0]['hidden']) {
        $('#padre_acudiente').parent().show();
        $('#tabs-icons-text-3-tab').show();
    } else {
        $('#padre_acudiente').parent().hide();
        $('#padre_acudiente').hide();
        $('#tabs-icons-text-3-tab').hide();
    }
});


$('#padre_acudiente').click(function () {
    $('#madre_acudiente').parent().hide();
    $('#tabs-icons-text-3-tab').hide();
});

