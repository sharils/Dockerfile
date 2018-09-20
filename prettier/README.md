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

### Markdown

```sh
docker run --rm -v $PWD:/prettier smutdose/prettier --parser=markdown --write README.md
```
