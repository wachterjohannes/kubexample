# Kubexample

## Prerequisites

__Deploy local ingress:__
```bash
kubectl apply -f https://raw.githubusercontent.com/kubernetes/ingress-nginx/master/deploy/provider/cloud-generic.yaml
```

## Local deployment

__Install forge (https://forge.sh/docs/tutorials/quickstart):__
```bash
curl https://s3.amazonaws.com/datawire-static-files/forge/$(curl https://s3.amazonaws.com/datawire-static-files/forge/latest.url)/forge -o /tmp/forge
chmod a+x /tmp/forge
sudo mv /tmp/forge /usr/local/bin
```

__Copy forge.yaml:__
```bash
cp forge.yaml.dist forge.yaml
```

__Deploy:__
```bash
forge deploy
```
