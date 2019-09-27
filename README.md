# Omnipay: MuniciPAY

---

### MuniciPAY driver for the Omnipay payment processing library

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment processing library for PHP 5.3+. This package implements MuniciPAY 2.0 support for Omnipay.

## Installation

---

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it to your `composer.json`file:

```
{
    "require": {
        "aravindpanicker/municipay": "dev-master"
    }
}
```

Since MuniciPAY package is not official yet, you will need to add the MuniciPAY git respoistory to the `composer.json` file:

```
"repositories": [
        {
            "type": "package",
            "package": {
                "name": "aravindpanicker/municipay",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/aravindpanicker/municipay.git",
                    "type": "git",
                    "reference": "master"
                },
                "autoload": {
                    "psr-4": { "Omnipay\\Municipay\\" : "src/" }
                }
            }
        }
    ]
```

## Basic Usage

---

```
$gateway = Omnipay::create('Municipay');
```



