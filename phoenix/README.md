# Phoenix

Environment ready for creating web app based on the latest version of Phoenix Framework

## Create App

```sh
# Clone repo
git clone --depth=1 https://github.com/sharils/Dockerfile /tmp/Dockerfile
cd /tmp/Dockerfile/phoenix

# Create app
docker-compose run --rm --volume $PWD:$PWD --workdir $PWD web mix phx.new hello
cp Dockerfile docker-compose.yaml hello
cd hello

# Change db hostname to match docker-compose.yaml file
sed -i.bak '/hostname: "localhost",/s/hostname: "localhost",/hostname: "db",/' ./config/dev.exs
rm ./config/dev.exs.bak

# Customise app port (optional)
sed -i.bak '/http: \[port: 4000\],/s/http: \[port: 4000\],/http: [port: 25976],/' ./config/dev.exs
rm ./config/dev.exs.bak

# Create database for the app
docker-compose run web mix ecto.create
```

## Start App

```sh
docker-compose up
```

## Clean up

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
$ docker-compose run web sh -c 'mix phx.new --version && node -v && npm -v'
Starting phoenix_db_1 ... done
Phoenix v1.3.0
v8.9.1
5.5.1
```
