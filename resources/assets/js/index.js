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
}

/* Action */
copyBtn.click(function() {
    $().onCopyBtnClick();
});

