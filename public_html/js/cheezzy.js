$( document ).ready(function() {
    var customersTpl = Handlebars.compile($('#customers').html()),
        pizzasTpl = Handlebars.compile($('#pizzas').html());

    Handlebars.registerHelper('glyph', function(flag) {
        glyph = flag == '1' ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>';
        return new Handlebars.SafeString(glyph);
    });

    function loadCustomersDD(selectedId) {
        $.getJSON('/customers', function(data) {
            renderTpl($('#customers_dd'), customersTpl, data);
            $('#submitOrder').removeAttr('disabled');
            $('#id_customer').val(selectedId);
        });
    }

    function renderPizzasTable() {
        $.getJSON('/pizzas', function(data) {
            renderTpl($('#pizzas_table'), pizzasTpl, data);
        });
    }

    function renderTpl(elem, tpl, data) {
        elem.html(tpl(data));
    }

    $('#add_customer_submit').click(function() {
        $.post('/customers', $('#add_customer_form').serialize(), function(data) {
            loadCustomersDD(data.id);
            $('#customer_modal').modal('hide');
        }, 'json');
    });

    $('#order_pizza_submit').click(function() {
        $.post('/pizzas', $('#add_pizza_form').serialize(), function(data) {
            renderPizzasTable();
        }, 'json');
    });

    loadCustomersDD();
    renderPizzasTable();
});




