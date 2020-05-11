### php-helloWorld
create the index.php which echo **Hello World**

#### How to run using the docker command
```bash
docker run -d -p 8080:80 -v ${PWD}:/var/www/html php:7.2-apache
```
- From the docker command, current directory is mounted into the container. So if you changes the php file content, apache will automatically pick the changes & parse it to php for echo output from browser or curl command

```bash
curl localhost:8080
```

#### How to build and run using the different docker file
##### Build and run the image with php  
```bash
docker build -t <images-name> -f Dockerfile .
```
```bash
docker run <image-name>
```
##### Build and run the image with docker port expose 
```bash
docker build -t <images-name> -f Dockerfileweb .
```
```bash
docker run -p 8080:80 <image-name>
```
- To test
```bash
curl localhost:8080
```

##### Build and run the image without docker port expose 
```bash
docker build -t <images-name> -f Dockerfileapache .
```
```bash
docker run -p 8080:80 <image-name>
```
- To test
```bash
curl localhost:8080
```
