### php-helloWorld
create the index.php which echo **Hello World**

#### How to run
'''bash
docker run -d -p 8080:80 -v ${PWD}:/var/www/html php:7.2-apache
'''
- From the docker command, current directory is mounted into the container. So if you changes the php file content, apache will automatically pick the changes & parse it to php for echo output from browser or curl command

'''bash
curl localhost:8080
'''
