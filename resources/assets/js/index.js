/* Declare */
var index = index || {};
index.copy = index.copy || {};

/* Variable */
var copyBtn = $('#fuzhi-btn');
var copyTextArea = $('#fuzhi-textarea');

/* Function */
jQuery.fn.onCopyBtnClick = function() {
    var text = copyTextArea.val();
    console.log(text);
    $.ajax({
        type: 'POST',
        url: 'copyUrl',
        data: { url : text},
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
            console.log(data.data);
        },
        error: function(xhr, type){
            alert('Ajax error!')
        }
    });
}

/* Action */
copyBtn.click(function() {
    $().onCopyBtnClick();
});

