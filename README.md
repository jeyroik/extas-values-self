![PHP Composer](https://github.com/jeyroik/extas-values-self/workflows/PHP%20Composer/badge.svg?branch=master&event=push)
![codecov.io](https://codecov.io/gh/jeyroik/extas-values-self/coverage.svg?branch=master)
<a href="https://github.com/phpstan/phpstan"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat" alt="PHPStan Enabled"></a>

# Описание

Позволяет ссылаться на другие значения сущности.

# Использование

```php
use extas\components\values\WithComplexValue;
$item = new class ([WithComplexValue::FIELD__VALUE => '@parent.name']) extends WithComplexValue {
    use \extas\components\THasName;
};

$item->setName('test');
$item['replaces'] = ['parent' => $item];
echo $item->buildValue($item->getValue()); // test
```