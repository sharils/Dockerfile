# 7-Zip

7-Zip is a file archiver with a high compression ratio. <http://www.7-zip.org/>

## Usage

### Help

```sh
docker run --rm smutdose/7z
```

### Version

```sh
docker run --rm smutdose/7z | head -n4
```

### List contents of archive

```sh
docker run --rm --volume $PWD:/pwd:ro smutdose/7z l <archive_name>
```

### eXtract files with full paths

```sh
docker run --rm --volume $PWD:/pwd smutdose/7z x <archive_name>
```

### set Output directory then eXtract files with full paths

```sh
docker run --rm --volume $PWD:/pwd smutdose/7z x -o{Directory} <archive_name>
```

### alias 7z

```sh
alias 7z='docker run --rm --volume $PWD:/pwd smutdose/7z'
```
