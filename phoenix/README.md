# Phoenix

Environment ready for creating web app based on the latest version of Phoenix Framework

## Create App

```sh
# Clone repo
git clone --depth=1 https://github.com/sharils/Dockerfile /tmp/Dockerfile
cd /tmp/Dockerfile/phoenix

# Create app
docker-compose run --no-deps --rm --volume $PWD:$PWD --workdir $PWD web mix phx.new hello
cp docker-compose.yaml hello
cd hello

# Change db hostname to match docker-compose.yaml file
sed -i.bak '/hostname: "localhost",/s/hostname: "localhost",/hostname: "db",/' ./config/dev.exs
rm ./config/dev.exs.bak

# (optional) Customise app port
sed -i.bak '/http: \[port: 4000\],/s/http: \[port: 4000\],/http: [port: 4000],/' ./config/dev.exs
sed -i.bak '/- "4000:4000"/s/- "4000:4000"/- "4000:4000"/' ./docker-compose.yaml
rm ./config/dev.exs.bak
rm ./docker-compose.yaml.bak
```

## Create Database

```sh
# Create database for the app
docker-compose run --rm web mix ecto.create
docker-compose down
```

## Start App

```sh
docker-compose up
```

## Clean Up

```sh
# Remove just containers
docker-compose down
```

```sh
# Remove containers and volume
docker-compose down --volume
```

## Versions

```sh
$ docker-compose run --no-deps --rm web sh -c 'mix phx.new --version && elixir -v && echo -n "node " && node -v && echo -n "npm " && npm -v'
Phoenix v1.3.0
Erlang/OTP 20 [erts-9.1.5] [source] [64-bit] [smp:2:2] [ds:2:2:10] [async-threads:10] [hipe] [kernel-poll:false]

Elixir 1.5.2
node v8.9.1
npm 5.5.1
```
