# dockerwebapp
testing docker container deployment for web app on apache 2

# When deploying this you need to script the following commands

# FOLLOW THE STEPS BELOW

1. Remove existing container

> docker rm -f runningDWA

2. Build new container
> docker build -t dockerwebapp .

3. Run the docker container that has just been built
> docker run -d -p 80:80 --name runningDWA dockerwebapp
OR
> docker run -d -p 80:80 --name runningDWA -v /Users/anthonygrant/Documents/docker/dockerwebapp/webapp:/var/www/html dockerwebapp
