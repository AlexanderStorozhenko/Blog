
const history = UndoRedojs(5);
let textarea = $('.raw-content-box__textarea');
let undo = $('#undo');
let redo = $('#redo');
let save = $('#save');
let refresh = $('#refresh');
let resultArea = $('#resultArea');
textarea.keypress(function (event) {
    history.record(textarea.val(), false);
    console.log("eadsad");
});
undo.click(function () {
    if(history.undo(true)!=undefined) {
        textarea.val(history.undo());
    }
});
redo.click(function () {
    if(history.redo(true)!=undefined) {
        textarea.val(history.redo());
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



});
refresh.click(function () {
    // send("/api/editor/article/refresh",textarea.val());
    let send = async function() {
        await $.ajax({
            method: "POST", // метод HTTP, используемый для запроса
            url: "/api/editor/article/refresh", // строка, содержащая URL адрес, на который отправляется запрос
            data: { // данные, которые будут отправлены на сервер
                raw: textarea.val(),

            },
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function ( msg ) { // функции обратного вызова, которые вызываются если AJAX запрос выполнится успешно (если несколько функций, то необходимо помещать их в массив)
                resultArea.html(JSON.parse(msg).content);  // добавляем текстовую информацию и данные возвращенные с сервера
            }});
    }
    let data =  send();

    resultArea.val(data.content);
});

