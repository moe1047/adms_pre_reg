$(document).ready(function(){
    $('#transaction_no').show();
});
function check_payment($value){
    if($value=='dahabshiil'){
        $('#transaction_no').show();
    }
    if($value=='e-dahab'){
        $('#transaction_no').show();
    }
    if($value=='salama bank'){
        $('#transaction_no').show();
    }
    if($value=='ZAAD'){
        $('#transaction_no').hide();
    }
}

$(document).ready(function($){
    $('#faculty').change(function(){
        $.get("{{ url('api/populate/department')}}",
            { option: $(this).val() },
            function(data) {
                $('#department').empty();
                $.each(data, function(key, element) {
                    $('#department').append("<option value='" + key +"'>" + element + "</option>");
                });
            });
    });
});

