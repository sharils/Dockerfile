FROM ubuntu
MAINTAINER sharils@users.noreply.github.com

RUN apt-get install -y curl
RUN curl -R -O http://www.lua.org/ftp/lua-5.3.0.tar.gz

RUN tar zxf lua-5.3.0.tar.gz

WORKDIR lua-5.3.0
RUN apt-get update
RUN apt-get install -y gcc
RUN apt-get install -y make
RUN apt-get install -y libreadline-dev
RUN make linux test
RUN make linux install

WORKDIR /smutdose/lua
