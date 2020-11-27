const showTypeInforme = () => {
    const info = document.getElementById('informe').value
    let informeDosFecha = document.getElementById('desde-hasta')
    let informeFecha = document.getElementById('unico')
    if (info === 'SI') {
        informeDosFecha.style.display = "none"
        informeFecha.style.display = "initial"
    } else {
        informeDosFecha.style.display = "flex"
        informeFecha.style.display = "none"
    }
}
window.onload = () => {
    const informeDosFecha = document.getElementById('desde-hasta')
    informeDosFecha.style.display = "none"
}