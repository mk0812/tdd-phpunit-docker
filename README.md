# tdd-phpunit-docker
テスト駆動開発をPHP8.0でやる

```
PHP 8.0
PHPUnit 9.5
```

# 環境構築
## コンテナの構築/起動
```shell
$ docker compose up -d
```

## コンテナに入る
```shell
$ docker container exec -it phpunit bash
```

## PHPUnitをインストール
```shell
~:/app# composer require --dev phpunit/phpunit
```

## PHPUnitを実行
```shell
~:/app# vendor/bin/phpunit src/tests --testdox
```

## コンテナの停止/削除
```shell
~:/app# exit
# コンテナの停止・削除
$ docker compose down 
```

# 参考
[PHPUnit実行環境をDockerでサクッと構築！](https://zenn.dev/shun57/articles/4b2cbf33255de4)
