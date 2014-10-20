#ChezzyPizza

##Demo site

http://cheezzypizza-dpatrie.rhcloud.com

OpenShift is a PaaS akin to Heroku built by Red Hat. They offer 3 free "gears" which represent a processing unit (akin to dynos on Heroku).

##Goal

Write a pizza order form. As an extra, provide a list of all pizza ordered.

##Architecture

Front end will consist of one route:

- /orders

This route will be serviced by a web service. The presentation will be handled by a twitter bootstrap template.

The rest web service will consists of two endpoints:

- /customers
- /pizzas

##Database structure

customers   | pizzas
----------------------------
id          | id
name        | id_customer
            | has_tomato_sauce
            | has_cheese
            | has_pepperoni


##Technology used

- [OpenShift](https://www.openshift.com).
- LAMP (PHP 5.4 & MySQL 5.5)
- [Slim](http://www.slimframework.com/)
- [RedBean](http://redbeanphp.com)
- [Bootstrap](http://getbootstrap.com/)
- [HandleBar](http://handlebarsjs.com/)


###Note on choosen PHP framework

I haven't been doing a lot of PHP lately and I wanted something small that people currently use. I've looked into Slim, Silex, Laravel and Symphony as theses were the one I am hearing the most about. The last two were behemoth for the task at hand and I ended up choosing Slim because I like the name :). Most of my experience of the last 2 years was spent working with [Google Go](http://golang.org) and a legacy app written with Zend Framework so this was also a bit of a refresher on some current php tools.


##What I would do given more time

- Doing a many to many relationship for the pizzas and the toppings...to remove the sadness :).
- Build some actual models. There was not a lot of business logic and time was short so I skipped...
- Better UI. I'm a back-end guy...
- Unit tests. I didn't research what was the norm for unit testing on php theses days and this exercise is fairly simple so I skipped for now.
- Use the Jenkin cartridge on OpenShift to do continuous integration.
- More validations. There's not much right now!
- Config security...no password in the repo. Should probably use environment vars like for the DB host & port but couldn't find where to do this in OpenShift yet.
- DB security. Would not use the root user :).
- Auditing of the data (created, updated, deleted, etc...)
- Try what the cool kids are doing theses day with AngularJS, Backbone and the like (data-binding)
- A Golang port of the app backed up by MongoDB so I could fool around with the [mgo driver](https://labix.org/mgo)
