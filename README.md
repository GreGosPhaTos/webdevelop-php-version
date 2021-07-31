# webdevelopV2
webdevelop.fr new version


## Installation

[Install docker](https://docs.docker.com/engine/install/), then

`docker build -t webdevelop .`

`docker run -d -p 80:80 --name www_webdevelop -v "$PWD":/var/www/html webdevelop:latest`

Log into the running container:

`docker exec -i -t www_webdevelop /bin/bash`

or

`docker run --rm -it --name www_webdevelop -v "$PWD":/var/www/html webdevelop:latest /bin/bash`

## CI/CD

Using [travis and github](https://docs.travis-ci.com/user/tutorial/#to-get-started-with-travis-ci-using-github)


