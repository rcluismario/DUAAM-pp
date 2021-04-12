$(document).ready(function () {
    $('#collapse-sidebar').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

// === REGISTER USER TO DATABASE ===
function registerUser() {
    var user = document.getElementById('registerUser').value
    var name = document.getElementById('registerName').value
    var pass = document.getElementById('registerPassword').value

    var data = {
        user,
        name,
        pass
    }

    var json = JSON.stringify(data)
    var request = new XMLHttpRequest();
    request.open("POST", "/register_user", true);
    request.setRequestHeader("Content-Type", "application/json");
    request.send(json);
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            var result = JSON.parse(request.response)
            if (result.status == 200) {
                Swal.fire(
                    'Exito!',
                    'Se registró el usuario: ' + result.data.user,
                    'success'
                )
            }
        }
    }
}

//funcion
$('#btn-submit').on('click', function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: '<strong>Subir imagen:</strong>',
        html: '<strong><u>Folio</u>: </strong>' + document.getElementById('treeNumber').value + '<br>'
            + '<strong><u>Imágen:</u> </strong>' + document.getElementById('imgTree').value.split('\\').pop().split('/').pop() + '<br>',
        showCancelButton: true,
        confirmButtonColor: '#5cb85c',
        cancelButtonColor: '#d9534f',
        confirmButtonText: 'Confirmar'
    }).then((result) => {
        if (result.value) {
            form.submit();
        }
    })
});
function uploadPhoto() {
    var folio = document.getElementById('treeNumber').value
    var img = document.getElementById('imgTree').value

    var data = {
        folio,
        img: img.split('\\').pop().split('/').pop()
    }

}