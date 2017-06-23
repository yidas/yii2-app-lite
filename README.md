Yii 2 Lite Application Template
===============================

Yii 2 Light Application Template without Bower.

No Bower needed, less packages included, CDN Asset for View-Templates, let you start-up freely and refreshingly.

---

INTRODUCTION
------------

This template is a lite version of [Yii 2](http://www.yiiframework.com/) template, which works without Bower on `--no-dev` environment. Following by [yidas/yii2-app-basic](https://github.com/yidas/yii2-app-basic), this package uses CDN Asset View-Templates, but includes fixed Bower just for Yii2 Debug and Gii tool only,

---

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

```
composer create-project --prefer-dist yidas/yii2-app-lite
```

Also, you can make a minimal installation without development tool:
```
composer create-project --prefer-dist --no-dev yidas/yii2-app-lite
```

> With --no-dev project, set to prod-env or remove the debug & gii usage from `config/web.php` to prevent error.

---

### Install from an Archive File

[Download yii2-app-lite-2.0.12 Archive](https://github.com/yidas/yii2-app-lite/releases/download/2.0.12/yii2-app-lite-2.0.12.tar.gz)

1. Extract the downloaded file to a  Web-accessible folder, which includes vendor already.

2. Modify the `config/web.php` file by entering a secret key for the `cookieValidationKey` configuration item:

  ```
  'request' => [
      // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
      'cookieValidationKey' => '<secret random string goes here>',
  ],
  ```
3. Check and modify the permission of `runtime` and `web/assets` folders to `777` if needed.

---

DOCUMENTATION
-------------

Please refer to [Yii 2 Basic Project Template Document](https://github.com/yiisoft/yii2-app-basic/blob/master/README.md)

