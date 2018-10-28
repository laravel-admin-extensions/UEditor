UEditor extension for laravel-admin
======

这是一个 `laravel-admin` 扩展，用来将 [UEditor](https://ueditor.baidu.com/website/index.html) 集成进 `laravel-admin` 的表单中，依赖 [overtrue/laravel-ueditor](https://github.com/overtrue/laravel-ueditor)

## 安装

```bash
composer require codingyu/ueditor
```

发布 `overtrue/laravel-ueditor` 的资源
```bash
php artisan vendor:publish --provider='Overtrue\LaravelUEditor\UEditorServiceProvider'
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php

    'extensions' => [

        'ueditor' => [

            // 如果要关掉这个扩展，设置为false
            'enable' => true,

            // 编辑器的前端配置 参考：http://fex.baidu.com/ueditor/#start-config
            'config' => [
                'initialFrameHeight' => 400, // 例如初始化高度
            ]
        ]
    ]

```

后端配置 `config/ueditor.php`，参考 [overtrue/laravel-ueditor](https://github.com/overtrue/laravel-ueditor)

## 使用

在form表单中使用它：
```php
$form->editor('content');

// options 中参数会覆盖 extensions.ueditor.config 中参数
$form->editor('content')->options(['initialFrameHeight' => 800]);
```

## 大感谢
- [laravel-admin](https://github.com/z-song/laravel-admin)
- [overtrue/laravel-ueditor](https://github.com/overtrue/laravel-ueditor)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
