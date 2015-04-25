FROM php
MAINTAINER sharils@users.noreply.github.com

RUN apt-get update

RUN apt-get install -y git
RUN apt-get install -y gcc
RUN apt-get install -y make
RUN apt-get install -y re2c
RUN apt-get install -y php5
RUN apt-get install -y php5-json
RUN apt-get install -y php5-dev
RUN apt-get install -y libpcre3-dev

# ./install-json requires this
RUN apt-get install -y sudo

RUN git clone --depth=1 -v https://github.com/phalcon/zephir
WORKDIR zephir
RUN ./install-json
RUN ./install -c

WORKDIR /smutdose/zephir

CMD ["zephir"]
