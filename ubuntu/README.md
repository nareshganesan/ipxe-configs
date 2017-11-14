## iPXE setup for Ubuntu 16.04

The following setup helps quickly deploy a docker image with the boot configs for ubuntu 16.04 network boot. 

## Install
```bash
# checkout the git project
$ git clone https://github.com/nareshganesan/ipxe-configs.git
# change directory 
$ cd ipxe-configs/ubuntu;
# build docker image
# options
# - HOST_URL - base ip/dns from where the docker will server configs.
$ docker build --build-arg HOST_URL=localhost:80 -t ipxe-ubuntu .
# Run the docker build
$ docker run --rm -d -p 80:80 --name ipxe-ubuntu ipxe-ubuntu:latest
```


## Usage

```bash
# to access the configs

curl http://HOST_URL/boot.php

options
  - mac - mac address of the machine can be obtained using ${net0/mac}
  - ip - ip address of the machine can be obtained using ${net0/ip}

```

