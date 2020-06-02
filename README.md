# Installation

Require this package.

`composer require "schwarzer/php-code-style" --dev`

# Using this package

Create a PHP-CS-Fixer dist file.

`touch .php_cs.dist`

## Minimum Setup

Add this to your `.php_cs.dist` file.

```php
<?php

$classLoader = require __DIR__ . '/vendor/autoload.php';
$classLoader->register(true);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/your/source/code',
    ]);

return (new Schwarzer\PhpCs\Styles)($finder);
```

## Our Laravel Setup

```php
<?php

$classLoader = require __DIR__ . '/vendor/autoload.php';
$classLoader->register(true);


$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(getcwd())
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('index.php')
    ->notName('server.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Schwarzer\PhpCs\Styles)($finder);
```

# Ready

You can now use php-cs-fixer as usual.

- php-cs-fixer fix --dry-run
- php-cs-fixer fix
