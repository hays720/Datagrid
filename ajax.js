
$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
            return false; 
        }
    );
});

$( document ).ready(function() {
    $("#UpBtn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form_change', 'action_ajax_form.php');
            return false; 
        }
    );
});

$( document ).ready(function() {
    $("#DeleteBtn").click(
        function(){
            sendAjaxForm('result_form', 'DeleteForm', 'action_ajax_form.php');
            return false; 
        }
    );
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) {
             location.reload();
        },
        error: function(response) { 
            alert('Error');
        }
    });
}
