resume
======

See [JSON Resume](https://jsonresume.org/ "JSON Resume") for more info

Usage
-----

### Init ###

```sh
docker run --interactive --rm --volume $PWD:/resume smutdose/resume init
```

### Serve ###

```sh
docker run --interactive --rm --publish 4000:4000 --volume $PWD:/resume --tty smutdose/resume serve --port 4000
```

### Help ###

```sh
docker run --rm smutdose/resume --help
```

### Version ###

```sh
docker run --rm smutdose/resume --version
```
