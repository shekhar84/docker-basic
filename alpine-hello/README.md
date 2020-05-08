## docker-helloworld
### Build Docker Image

- Build image with **CMD** instruction
```bash
docker build -t alpine:hello-c -f Dockerfile-C .
```

- Build image with **Entrypoint** executable
```bash
docker build -t alpine:hello-e -f Dockerfile-E .
```
### Docker-hub:[shekharsarker84/beginner-image](https://hub.docker.com/repository/docker/shekharsarker84/beginner-image)
### How to run

- Run container
```bash
docker run --rm <image-id> 
```

### How to override the **CMD** and ***Entrypoint** instruction

- Override the cmd instruction and replace with ls (list files command)
```bash
docker run --rm <image_id> ash -c "ls"
```

```bash
docker run --rm --entrypoint "ls" <image-id>
```

