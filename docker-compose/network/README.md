### Network segregation using the docker-compose

##### Build and test 
```bash
docker-compose up
```
- To test php info 
```bash
curl localhost:8080/app1
curl localhost:8080/app2
```
- To clean, stop and remove the containers
```bash
docker-compose down
``` 