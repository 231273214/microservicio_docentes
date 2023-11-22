
// let text = "Doasjdh jahd jlakhdjklas hdjkasd jashdjkashdjkashd";
// const m = "j";
// text = text.replaceAll(m, '<span style="color:red;">'+m+'</span>');
// console.log(text);
// document.body.innerHTML += text;

$(document).ready(() => {
    let estudiantes = [];

    document.getElementById('registroBtn').addEventListener('click', () => {
        alert('ok')
        const form = document.forms['pruebaFrom'];
        const nombre = form['nombre'].value;
        $.ajax({
            url: 'http://127.0.0.1:8081/estudiantes',
            method: 'post',
            data: { nombre: nombre, email: 'pepe@test.test', telefono: '12345' }
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });

    function loadEstudiantes() {
        $.ajax({
            url: 'http://127.0.0.1:8081/estudiantes',
            method: 'get'
        }).done((response) => {
            estudiantes = [...response];
            document.getElementById('tabla').querySelector('tbody').innerHTML= estudiantes.map(item=>{
                let html = '<tr>';
                html += '   <td>' + item.id + '</td>';
                html += '   <td>' + item.nombre + '</td>';
                html += '</tr>';
                return html;
            }).join('');
        }).fail((err) => {
            console.error(err);
        });
    }
    loadEstudiantes();


    // $.ajax({
    //     url: 'http://127.0.0.1:8081/estudiantes/1',
    //     method: 'put',
    //     data: { nombre: 'Pepe 2', email: 'pepe@test.test', telefono: '12345' }
    // }).done((response) => {
    //     console.log(response);
    // }).fail((err) => {
    //     console.error(err);
    // });

    // $.ajax({
    //     url: 'http://127.0.0.1:8081/estudiantes/1',
    //     method: 'delete',
    // }).done((response) => {
    //     console.log(response);
    // }).fail((err) => {
    //     console.error(err);
    // });

});


function pruebaClick(id) {
    alert('ok: ' + id);
    $.ajax({
        url: 'http://127.0.0.1:8081/estudiantes/' + id,
        method: 'get',
    }).done((response) => {
        console.log(response);
    }).fail((err) => {
        console.error(err);
    });
}