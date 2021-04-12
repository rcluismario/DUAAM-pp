console.log('Loaded!')

// === REDIRECT FUNCTIONS ===
function donationsLink() {
    window.open('https://donaciones.donaunarbolalmundo/')
}
function treeSearch(){
    var folio = document.getElementById('treeTextField').value
    window.open('https://donaunarbolalmundo.org/tuarbolito/' + folio)
}

// === MENSAJE FUERA DE SERVICIO ===
function alertError() {
    Swal.fire(
        'No disponible!',
        'Nuestra página de donaciones se encuentra en mantenimiento, lo sentimos.',
        'error'
    )
}