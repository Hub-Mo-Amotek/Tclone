
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

inhertitance in twig 
ex: <br/>
`` {% extends base.html.twig %} ``

