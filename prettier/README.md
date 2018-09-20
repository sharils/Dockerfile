# Prettier

Prettier is an opinionated code formatter. <https://prettier.io/>

## Usage

### Help

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier
```

### Version

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier --version
```

### JavaScript

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier --write '**/*.js'
```

### JSON

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier --parser=json --write '**/*.json'
```

### Markdown

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier --parser=markdown --write '**/*.md'
