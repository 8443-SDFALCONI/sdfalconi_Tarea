function activar() {
    if (document.getElementById('valor1').selected == true) {
        document.getElementById('lado_1').disabled = false;
        document.getElementById('lado_2').disabled = true;
        document.getElementById('lado_3').disabled = true;
    } else if (document.getElementById('valor2').selected == true) {
        document.getElementById('lado_1').disabled = false;
        document.getElementById('lado_2').disabled = false;
        document.getElementById('lado_3').disabled = true;
    } else if (document.getElementById('valor3').selected == true) {
        document.getElementById('lado_1').disabled = false;
        document.getElementById('lado_2').disabled = false;
        document.getElementById('lado_3').disabled = false;
    }
}