$( document ).ready(function() {
    var customersTpl = Handlebars.compile($('#customers').html()),
        pizzasTpl = Handlebars.compile($('#pizzas').html());

    Handlebars.registerHelper('glyph', function(flag) {
        glyph = flag == "1" ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>';
        return new Handlebars.SafeString(glyph);
    });


    $.getJSON('/customers', function(data) {
        renderTpl($('#customers_dd'), customersTpl, data);
        $('#submitOrder').removeAttr('disabled');
    });

    $.getJSON('/pizzas', function(data) {
        renderTpl($('#pizzas_table'), pizzasTpl, data);
    });
});

function renderTpl(elem, tpl, data) {
    elem.html(tpl(data));
}
