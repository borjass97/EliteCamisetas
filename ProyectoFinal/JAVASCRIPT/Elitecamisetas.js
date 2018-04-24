    function envios() {
        var provincia = document.getElementById("provincia").value;
        var gastos = document.getElementById("gasto_envios");
        var descuentos = document.getElementById("descuento_envios");
        var envios_islas = "2.95";
        var envios_peninsula = "5.95";

        if (provincia === 'laspalmas' || provincia === 'santacruztenerife') {
            gastos.innerHTML = envios_islas + "€";
            descuentos.innerHTML = "-" + envios_islas + "€";
        } else {
            gastos.innerHTML = +envios_peninsula + "€";
            descuentos.innerHTML = "-" + envios_peninsula + "€";
        }
    }