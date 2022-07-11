// Materialize

$(document).ready(function() {

// Components

    // Datepicker
    $('.datepicker').datepicker({
        "format": "dd-mm-yyyy",
        "yearRange": 50,
        "firstDay": 1,
        "i18n": {
            "months": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            "monthsShort": ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            "weekdays": ["Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "S&aacute;bado"],
            "weekdaysShort": ["Dom", "Lun", "Mar", "Mi&eacute;", "Jue", "Vie", "S&aacute;b"]
        }
    }).datepicker("setDate", new Date());

    // Collapsibles
    $('.collapsible').collapsible();

    // dropdown
    $('.dropdown-trigger').dropdown();

    // modal
    $('.modal').modal();

    // select
    $('select').formSelect();

    // scrollspy
    $('.scrollspy').scrollSpy();

    // tabs
    $('.tabs').tabs();

    // tooltips
    $('.tooltipped').tooltip();

    // textarea
    $('input#input_text').characterCounter();
    $('textarea#textarea').characterCounter();
    $('#ticketMessage').characterCounter();

// Menu

    // Sidenav
    $('.sidenav').sidenav();

    // Sidenav Left
    $('#sidenav-1').sidenav({
        "edge": "left",
        "outDuration": 700
    });

    // Sidenav Right
    $('#sidenav-2').sidenav({
        "edge": "right",
        "outDuration": 700
    });

// Utilities

    // Disable Input Enter
    $('input').bind('keypress', function(e) {
        if(e.keyCode == 13) {
            return false;
        }
    });

    // Top Preloader Line
    setTimeout(appReady, 3600);
    function appReady(){
        let appContainer = document.getElementById("appContainer");
        while (appContainer.firstChild){
            appContainer.removeChild(appContainer.firstChild);
        }
        let app = document.createElement("div");
        app.textContent = "";
        appContainer.appendChild(app);
    }

    // Validate Fields
    $("#formValidate").validate({
        rules: {
            ticketMessage: {
                required: true
            },
            clientId: {
                required: true
            }
        },
        // Custom
        messages: {
            ticketMessage: {
                required: "Campo requerido."
            },
            clientId: {
                required: "Campo requerido."
            }
        },
        // Error
        errorElement : 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });

});
