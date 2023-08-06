# jake-h-assessment

This is a simple Wordpress application that displays a list of all the US states and territories

![Docker Containers](./images/docker_ps.png)

## Requirements

In order to set up local development environment you will need the following:

- [Docker](https://docs.docker.com/get-started/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [PHP](https://www.php.net/manual/en/install.php)
- [Composer](https://getcomposer.org/)

## Getting Started

1. First make sure you have all the requirements above.

2. Clone this repo to your local 

3. We will install the required composer packages in our custom theme folder.
At the project level directory run this ...

```
cd themes/main/
composer install
```

.. and, step back up to the project directory
```
cd .. 
cd ..
```
You should now have a /vendor folder in /themes/main

4. Define environment variables for docker.

Create a new file named `.env` in the project directory, 

```
touch .env
```
    
...and copy the contents from `.env.example` into to this new file.

```
cp .env.example .env
```
Feel free to change these custom variables if you'd like

5. Start our docker containers

Make sure you have docker running in the background

In the main project directory run ...

```
docker-compose up -d 

\\or this to keep the log running
docker-compose up 
\\ Ctrl + Z to close the log
```

Make sure you have no docker instances currently running, or have applications running on the ports needed (Apache, Xampp, etc.)

You may need to shut down any processes you have running, or adjust the ports in the docker-compose.yml

6. You should now have now have the Wordpress instance running on port 8080.

Visit [localhost:8080](http://localhost:8080/) and you should see this.

![WP Install](./images/wp_start.png)

Continue on, 

- choose a region
- pick a site title
- create your own username
- create a password
- add an email

You will be brought into the admin.

If you forget the password and username, you'll lose admin access, and there is no recovery solution currently. But you'll still be able to see the build at localhost:8080

7. Click on the house dropdown in top left corner

![Home](./images/home.png)

You'll be brought to the page with the desired functionality 

![Final](./images/page.png)

To close the containers..

```
docker-compose down
```

## Notes
 - This was built on Ubuntu/Linux
 - I used mariadb for compatibility reasons
 - I'm using the `cached_data.json` file to hold the `public.opendatasoft.com` data
 - `/mu_plugins` is being used to auto-assign the custom theme to  'main' during the install 
 - If you run into any problems you can contact me here: `howardjake9512@gmail.com`