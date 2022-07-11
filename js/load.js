function downloadJSAtOnload() {

	var element = document.createElement("script");
	element.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "../plugins/ckeditor/ckeditor.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "../js/materialize.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js";
	document.body.appendChild(element);

	var element = document.createElement("script");
	element.src = "../js/datatables.js";
	document.body.appendChild(element);

}

if (window.addEventListener)window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
