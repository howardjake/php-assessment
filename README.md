# jake-h-assessment

This is a simple Wordpress application that displays a list of all the US states and territories

![Docker Containers](docker_ps.png)

## Requirements

In order to set up local development environment you will nee the following:

- [Docker](https://docs.docker.com/get-started/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [PHP](https://www.php.net/manual/en/install.php)
- [Composer](https://getcomposer.org/)

## Getting Started

First make sure you have all the requirements above

First off we install the composer packages in our custom theme.

In the terminal at the project directory 

```
cd themes/main/
composer install
```

Step back to the project directory
```
cd .. 
cd ..
```
We should now have a /vendor folder 