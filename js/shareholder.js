$(document).ready(function() {
    var maxField = 20;
    var addButton = $('.add_button');
    var delButton = $('.del_button');
    var wrapper = $('.field_wrapper');
    var fieldHTML = '\
        <div class="row">\n\
            <div class="col l5 m-t--20">\n\
                <div class="input-field">\n\
                    <input id="shareholderName" type="text" name="shareholderName[]">\n\
                </div>\n\
            </div>\n\
            <div class="col l2 m-t--20 ">\n\
                <div class="input-field">\n\
                    <input id="personId" type="text" name="personId[]">\n\
                </div>\n\
            </div>\n\
            <div class="col l2 m-t--20">\n\
                <div class="input-field">\n\
                    <input id="shareholderPercent" type="number" name="shareholderPercent[]" min="0" max="100" step="0.01" class="validate">\n\
                </div>\n\
            </div>\n\
            <a href="javascript:void(0);" class="remove_button" title="Remove field">\n\
                <i class="material-icons red-text m-t-10">close</i>\n\
            </a>\n\
        </div>';
    var x = 1;
    $(addButton).click(function() {
        if(x < maxField) {
            x++;
            $(wrapper).append(fieldHTML);
        }
    });
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    });
});
