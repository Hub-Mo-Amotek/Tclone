
# twitter 2.0

Creating a twitter clone with symfony and twig.
taking my time to get to know more of symfony and twig while tweeting the handy stuff down here.

## The idea 

building a complete application where people can tweet, like tweets, leave comments and follow other tweeters.

***progress:
40/100%***
<br/>
<br/>

---

handy symfony commands: <br/>
`` symfony check:requirements ``


start a symfony project: <br/>
`` symfony new projectname --version="6.1" ``

## symfony filestructure:

> ***bin/console:*** used to interact with your application trough console if you dont have symfony globally installed.
`` php bin/console ... ``

> ***config:*** where all the configuration files of the application will go.

> ***public/index.php:*** contains the entrypoint of the application = index.php

> ***src:*** this will contain all the business logic of the application.

> ***var:*** internal symfony stuff.

> ***vendor:*** contains all the 3th party libraries and its being managed by composer.

> ***.env:*** used to pass enviromental variables to the application.

<br/>
<br/>
<br/>

# how symfony works

![how Symfony works image](./images/Schermafbeelding%202022-10-19%20om%2013.52.12.png "symfony explained")

### route parameter validation

ex: <br/>``  #[Route('/messages/{id<\d+>}', name: 'app_showOne')] ``


# twig templates

### inhertitance in twig 
ex: <br/>
`` {% extends base.html.twig %} ``

### twig control structures
ex forloop: <br/>
`` 
{% for row in array %} <div> // stuff </div> {% endfor%}
``
<br/>
<br/>

ex if statement: <br/>
``
{% if array|length > 0 %}
    // do stuff
{% else %}
    // do other stuff
{% endif %}
``
<br/>

### partial template
> you can create a reusable tamplate like: <br/>
`` 
_templateName.html.twig
 ``
 <br/>
> to use this this template add ( and pass data to the include template): <br/>
`` {{ include ("hello/_templateName.html.twig, param: message)}} ``

### generating links
ex: <br/>
`` <a href="{{ app_path_name, {id: key} }}" ``
***always give your routes a name***

# symfony make bundle
>Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.

install and enable with this command: <br/>
`` composer require --dev symfony/maker-bundle
 ``
 <br/>
 to know what the maker bundle can do for you run : <br/>
 `` symfony console list make ``

![symfony console list make](./images/Schermafbeelding%202022-10-19%20om%2014.59.20.png)

# database and doctrine
to get doctrine run: <br/>
`` composer require symfony/orm-pack
 ``
 <br/>
<br/>
![how doctrine works](./images/Schermafbeelding%202022-10-19%20om%2015.48.08.png)
ORM = Object Relational Mapping

<br/>
<br/>

#### to know what doctrine can do for you run: <br/>

`` symfony console list doctrine ``
<br/>
![symfony console list doctrine ](./images/Schermafbeelding%202022-10-19%20om%2015.52.36.png)




