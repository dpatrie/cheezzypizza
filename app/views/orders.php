<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CheezzyPizza</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h1>CheezzyPizza: We only sell the cheezziest!!</h1>
            <br/>
            <h4>Who's the customer?</h4>
            <form role="form" method="post">
                <div id="customers_dd">
                    <select class="form-control" name="id_customer" id="id_customer" disabled="disabled">
                        <option>Loading...</option>
                    </select>
                </div>
                <h4>Select sad toppings</h4>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="has_tomato_sauce" id="has_tomato_sauce"> Tomato Sauce
                    </label>
                    <label>
                        <input type="checkbox" name="has_cheese" id="has_cheese"> Cheese
                    </label>
                    <label>
                        <input type="checkbox" name="has_pepperoni" id="has_pepperoni"> Pepperoni
                    </label>
                </div>
                <button type="submit" id="submitOrder" class="btn btn-default" disabled="disabled">Submit</button>
            </form>
            <hr/>
            <h3>Current Pizza Orders</h3>
            <div id="pizzas_table"></div>

          </div>
          <div class="col-md-4"></div>
        </div>
    </div>


<!-- Small modal -->


    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          ...
        </div>
      </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cheezzy.js"></script>

    <script id="customers" type="x-tmpl-mustache">
        <select class="form-control" name="id_customer" id="id_customer">
            {{#each customers}}
                <option value="{{id_customer}}">{{name}}</option>
            {{/each}}
        </select>
        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Add New</button>
    </script>
    <script id="pizzas" type="x-tmpl-mustache">
        <table class="table table-striped table-bordered">
            <thead>
                <th>Customer</th>
                <th>Tomato Sauce</th>
                <th>Cheese</th>
                <th>Pepperoni</th>
            </thead>
            <tbody>
            {{#each pizzas}}
            <tr>
                <td>{{name}}</td>
                <td>{{glyph has_tomato_sauce}}</td>
                <td>{{glyph has_cheese}}</td>
                <td>{{glyph has_pepperoni}}</td>
            </tr>
            {{/each}}
            </tbody>
        </table>
    </script>
  </body>
</html>
