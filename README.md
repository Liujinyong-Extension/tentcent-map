<h1 align="center"> tencent-map </h1>

<p align="center"> 基于腾讯地图开发的包.</p>


## 安装

```shell
$ composer require liujinyong/tencent-map 
```

## 使用

```php

require __DIR__ . '/vendor/autoload.php';

$main = new \Liujinyong\TencentMap\Main("腾讯地图的key");

//地址换经纬度
$res = $main->address2latlon("需要转换的地址")

```


## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liujinyong/tencent-map/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liujinyong/tencent-map/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT# tencent-map
