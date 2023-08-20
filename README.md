# PHP Load Testing

This application performs various hardware resource intensive operations.

## How to use this application

Add the request parameter "operation" after the url as follows:

```
http://localhost:80?operation=<OPERATION>

OPERATION:
'cpu' => CPU Intensive
'memory' => Memory Intensive
'disk' => Disk Intesnsive
'network' => Network Intensive
```

## How to deploy this application

```
docker compose up
```