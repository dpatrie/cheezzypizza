#ChezzyPizza

##Goal

Write a pizza order form backed with a relational database. As an extra, provide a list of all pizza ordered.

##Architecture

Front end will consist of one route:

- /orders/

This route will be serviced by a rest web service. The presentation will be handled by a twitter bootstrap template.

The rest web service will consists of two endpoints:

- /customers/
- /pizzas/

##Database structure

customers   | pizzas
----------------------------
id_customer | id_pizza
name        | id_customer
            | has_tomato_sauce
            | has_cheese
            | has_pepperoni


##Technology used
- [OpenShift](https://www.openshift.com). This is a PaaS akin to Heroku built by Red Hat. They offer 3 free "gears" which represent a processing unit (akin to dynos on Heroku).
- PHP 5.4
- MySQL 5.5
- [SlimFramework](http://www.slimframework.com/).
- [RedBean](http://redbeanphp.com)
- Github

###Note on choosen framework
I haven't been doing a lot of PHP lately and I wanted something small that people currently use. I've looked into Slim, Silex, Laravel and Symphony has theses were the one I am hearing the most about. The last two were behemoth for the task at hand and I ended up choosing Slim because I like the name :). Most of my experience of the last 2 years was spent working with [Google Go](http://golang.org) and a legacy app written with Zend Framework (God help me).


##What I would do given more time
- Use the Jenkin cartridge on OpenShift to do continuous integration.
- Unit tests. I don't know if PHPUnit is still the norm theses days.
- More validations.
- Endpoint security.
- Auditing of the data
- A Golang port of the web service backed up by MongoDB so I could fool around with the [mgo driver](https://labix.org/mgo)
- Doing a many to many relationship for the pizzas and the toppings...to remove the sadness :). Database structure would go as such:

customers   | pizzas        | toppings      | pizza_has_topping
----------------------------------------------------------------
id_customer | id_pizza      | id_topping    | id_pizza
name        | id_customer   | name          | id_topping










