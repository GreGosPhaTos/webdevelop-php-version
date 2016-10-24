# webdevelopV2
webdevelop.fr new version


## Installation

Use the Docker box install docker : 

`docker build -t webdevelop .`

`docker run -d -p 80:80 --name webdevelop -v "$PWD":/var/www/html webdevelop:latest`

Log into the running container:

`docker exec -i -t webdevelop /bin/bash`

or

`docker run --rm -it --name webdevelop -v "$PWD":/var/www/html webdevelop:latest /bin/bash`


