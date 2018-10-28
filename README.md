# Kubexample

## Prerequisites

__Deploy local ingress:__
```bash
kubectl apply -f https://raw.githubusercontent.com/kubernetes/ingress-nginx/master/deploy/provider/cloud-generic.yaml
```

## Local deployment

__Build application image:__
```bash
docker build -t kubexample:latest application
```

__Deploy application to cluster:__
```bash
kubectl apply -f deployment
```
