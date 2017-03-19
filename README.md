Sales is project on [Yii 2](http://www.yiiframework.com/) Advanced framework
============================================================================

Yii 2 Advanced Project Template
===============================

Features
--------
Register | Authorization : email, social networks 
    [vk(OAuth 2.0), fb(OAuth 2), ok(OAuth 2), tw(OAuth 1.0a), instagram(OAuth2.0), g+(OAuth 2)]
Site settings: save in a files and edited by the administrator
Management group must change the password every 'X' days and the password should not be the previous three
The 'log out on all devices' feature
Account binding by IP (optional)
A certain number of authorization attempts (captcha, timeout)
Role base access control featuring
Keep history of the prices of goods
    
Controller structure
--------------------

```
SiteController
    index/                  home page
    contacts/               contacts
    about/                  about the site
    terms/                  terms of use
    faq/                    frequently asked questions
    feedback/               contact administration of the site
    payments/               terms of payment and delivery of goods

CardController
    index                   the card
    desires                 custumer wish list
    compare                 compare two ot three goods

AuthController
    login                   sign in on the site
    signup                  sign up on the site
    forgot                  user forgot the password
    restore                 
    request
    expire                  when managment unit long time not change password
```

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
