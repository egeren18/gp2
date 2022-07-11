// Customized Datatables

$(document).ready(function() {

    // Datatable
    $('#example').css('font-size', '0.9em').DataTable( {
        "dom": 'Bfrtip',
        "pageLength": 7,
        "responsive": true,
        "order": [
        	[0, 'asc']
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        },
        "buttons": [{
            "extend": 'copyHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">content_copy</i>',
            "titleAttr": 'Copiar',
            "className": 'export-copy ttip'
        }, {
            "extend": 'excelHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">grid_on</i>',
            "titleAttr": 'MS Excel'
        }, {
            "extend": 'csvHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">developer_mode</i>',
            "titleAttr": 'CSV'
        }, {
            "extend": 'pdfHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">picture_as_pdf</i>',
            "titleAttr": 'PDF'
        }, {
            "extend": 'print',
            "text": '<i style="font-size: 1.1em" class="material-icons">print</i>',
            "titleAttr": 'Imprimir',
            "exportOptions": {
            	"columns": ':visible'
            }
        }, {
            "extend": 'colvis',
            "text": '<i style="font-size: 1.1em" class="material-icons">view_column</i>',
            "titleAttr": 'Filtrar Columnas',
        },],
        "fnDrawCallback" : function (oSettings) {
            var total_count = oSettings.fnRecordsTotal();
            var show_num = oSettings._iDisplayLength;
            var tbody = $(this).children('tbody');
            var tr_count = tbody.children('tr').length;
            var missing = show_num - tr_count;
            tbody.find("tr td").css ("padding-bottom", '');
            if (show_num < total_count && missing > 0)    
            var lastRowHeight = tbody.find('tr:last-child').height();
            var lastRowCells = tbody.find('tr:last-child td');
            var existingPadding = parseFloat (lastRowCells.css ("padding-bottom"));
            lastRowCells.css ("padding-bottom", (existingPadding + (lastRowHeight * missing))+"px");
        },
        "columnDefs": [{
        	"targets": '_all',
        	"visible": true
        }]
    });

 // Datatable
    $('#examplezz').css('font-size', '0.9em').DataTable( {
        "dom": 'Bfrtip',
        "pageLength": 7,
        "responsive": true,
        "order": [
        	[0, 'asc']
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        },
        "buttons": [{
            "extend": 'copyHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">content_copy</i>',
            "titleAttr": 'Copiar',
            "className": 'export-copy ttip'
        }, {
            "extend": 'excelHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">grid_on</i>',
            "titleAttr": 'MS Excel'
        }, {
            "extend": 'csvHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">developer_mode</i>',
            "titleAttr": 'CSV'
        }, {
            "extend": 'pdfHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">picture_as_pdf</i>',
            "titleAttr": 'PDF'
        }, {
            "extend": 'print',
            "text": '<i style="font-size: 1.1em" class="material-icons">print</i>',
            "titleAttr": 'Imprimir',
            "exportOptions": {
            	"columns": ':visible'
            }
        }, {
            "extend": 'colvis',
            "text": '<i style="font-size: 1.1em" class="material-icons">view_column</i>',
            "titleAttr": 'Filtrar Columnas',
        },],
        "fnDrawCallback" : function (oSettings) {
            var total_count = oSettings.fnRecordsTotal();
            var show_num = oSettings._iDisplayLength;
            var tbody = $(this).children('tbody');
            var tr_count = tbody.children('tr').length;
            var missing = show_num - tr_count;
            tbody.find("tr td").css ("padding-bottom", '');
            if (show_num < total_count && missing > 0)    
            var lastRowHeight = tbody.find('tr:last-child').height();
            var lastRowCells = tbody.find('tr:last-child td');
            var existingPadding = parseFloat (lastRowCells.css ("padding-bottom"));
            lastRowCells.css ("padding-bottom", (existingPadding + (lastRowHeight * missing))+"px");
        },
        "columnDefs": [{
        	"targets": '_all',
        	"visible": true
        }]
    });



// Datatable
    $('#example2').css('font-size', '0.9em').DataTable( {
        "dom": 'Bfrtip',
        "pageLength": 7,
        "responsive": true,
        "order": [
        	[0, 'asc']
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        },
        "buttons": [{
            "extend": 'copyHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">content_copy</i>',
            "titleAttr": 'Copiar',
            "className": 'export-copy ttip'
        }, {
            "extend": 'excelHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">grid_on</i>',
            "titleAttr": 'MS Excel'
        }, {
            "extend": 'csvHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">developer_mode</i>',
            "titleAttr": 'CSV'
        }, {
            "extend": 'pdfHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">picture_as_pdf</i>',
            "titleAttr": 'PDF'
        }, {
            "extend": 'print',
            "text": '<i style="font-size: 1.1em" class="material-icons">print</i>',
            "titleAttr": 'Imprimir',
            "exportOptions": {
            	"columns": ':visible'
            }
        }, {
            "extend": 'colvis',
            "text": '<i style="font-size: 1.1em" class="material-icons">view_column</i>',
            "titleAttr": 'Filtrar Columnas',
        },],
        "fnDrawCallback" : function (oSettings) {
            var total_count = oSettings.fnRecordsTotal();
            var show_num = oSettings._iDisplayLength;
            var tbody = $(this).children('tbody');
            var tr_count = tbody.children('tr').length;
            var missing = show_num - tr_count;
            tbody.find("tr td").css ("padding-bottom", '');
            if (show_num < total_count && missing > 0)    
            var lastRowHeight = tbody.find('tr:last-child').height();
            var lastRowCells = tbody.find('tr:last-child td');
            var existingPadding = parseFloat (lastRowCells.css ("padding-bottom"));
            lastRowCells.css ("padding-bottom", (existingPadding + (lastRowHeight * missing))+"px");
        },
        "columnDefs": [{
        	"targets": '_all',
        	"visible": true
        }]
    });









    // Q
    $('#q').DataTable( {
        "dom": 'Bfrtip',
        "pageLength": 7,
        "responsive": true,
        "order": [
            [0, 'asc']
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        },
        "buttons": [{
            "extend": 'copyHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">content_copy</i>',
            "titleAttr": 'Copiar',
            "className": 'export-copy ttip'
        }, {
            "extend": 'excelHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">grid_on</i>',
            "titleAttr": 'MS Excel'
        }, {
            "extend": 'csvHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">developer_mode</i>',
            "titleAttr": 'CSV'
        }, {
            "extend": 'pdfHtml5',
            "text": '<i style="font-size: 1.1em" class="material-icons">picture_as_pdf</i>',
            "titleAttr": 'PDF'
        }, {
            "extend": 'print',
            "text": '<i style="font-size: 1.1em" class="material-icons">print</i>',
            "titleAttr": 'Imprimir',
            "exportOptions": {
                "columns": ':visible'
            }
        }, {
            "extend": 'colvis',
            "text": '<i style="font-size: 1.1em" class="material-icons">view_column</i>',
            "titleAttr": 'Filtrar Columnas',
        },],
        "fnDrawCallback" : function (oSettings) {
            var total_count = oSettings.fnRecordsTotal();
            var show_num = oSettings._iDisplayLength;
            var tbody = $(this).children('tbody');
            var tr_count = tbody.children('tr').length;
            var missing = show_num - tr_count;
            tbody.find("tr td").css ("padding-bottom", '');
            if (show_num < total_count && missing > 0)    
            var lastRowHeight = tbody.find('tr:last-child').height();
            var lastRowCells = tbody.find('tr:last-child td');
            var existingPadding = parseFloat (lastRowCells.css ("padding-bottom"));
            lastRowCells.css ("padding-bottom", (existingPadding + (lastRowHeight * missing))+"px");
        },
        "columnDefs": [{
            "targets": '_all',
            "visible": true
        }]
    });

});
