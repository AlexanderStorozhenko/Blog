
const history = UndoRedojs(5);
let id = $('#id');
let textarea = $('.raw-content-box__textarea');
let title = $('#title');
let text = $('#text');
let result_title = $('#result_title');
let result_text = $('#result_text');
let undo = $('#undo');
let redo = $('#redo');
let save = $('#save');
let refresh = $('#refresh');
let resultArea = $('#resultArea');

textarea.keypress(function (event) {
    history.record(textarea.val(), false);
    setStatus();
});
title.keyup(function (event) {
    result_title.text(title.val());
});
text.keyup(function (event) {
    result_text.text(text.val());
});
setStatus();
function setStatus(){

    if(history.undo(true)==undefined)
        undo.addClass('disabled');
    else undo.removeClass('disabled');

    if(history.redo(true)==undefined)
        redo.addClass('disabled');
    else redo.removeClass('disabled');

}
undo.click(function () {
    if(!undo.hasClass('disabled'))
    if(history.undo(true)!=undefined) {
        textarea.val(history.undo());
        setStatus();
    }

});
redo.click(function () {
    if(!redo.hasClass('disabled'))
    if(history.redo(true)!=undefined) {
        textarea.val(history.redo());
        setStatus();
    }

});
// async function send(url,data){
//     const result = await fetch(url,{
//         method:"POST",
//         body:textarea.val(),
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     console.log(result);
// }
save.click(function () {
    if(!save.hasClass('disabled')) {
        let send = async function () {
            await $.ajax({
                method: "POST",
                url: "/api/editor/article/save",
                data: {
                    id: id.val(),
                    raw: textarea.val(),
                    text: text.val(),
                    title: title.val(),
                },
                beforeSend: function () {
                    save.addClass('disabled');
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {
                    resultArea.html(JSON.parse(msg).content);
                    save.removeClass('disabled');
                }
            });
        }
        let data = send();
    }


});
refresh.click(function () {
    if(!refresh.hasClass('disabled')) {
        let send = async function () {
            await $.ajax({
                method: "POST",
                url: "/api/editor/article/refresh",
                data: {
                    raw: textarea.val(),
                },
                beforeSend: function () {
                    refresh.addClass('disabled');
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {
                    resultArea.html(JSON.parse(msg).content);
                    refresh.removeClass('disabled');
                }
            });
        }
        let data = send();
    }
});

