$(document).ready(function() {
    request = $.ajax({
        url: "process.php",
        type: 'post',
        data: {action : 'log', uid : uid},
    });
    
    // Callback handler that will be called on success
    request.done(function (response, textStatus) {
        console.log(textStatus);
        $('div#logdata').html(response);
    });
});

function confirmb(text) {
    bootbox.confirm(text, function(result){ 
        if (result) {
          window.location.href = 'logout.php';
        }
    });
}