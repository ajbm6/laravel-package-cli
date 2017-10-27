<?php return '{
  "name": "dummy/dummy-package",
  "description": "A Laravel Package",
  "license": "MIT",
  "authors": [
  ],
  "minimum-stability": "stable",
  "require": {
    "php" : "^7.0",
  },
  "require-dev": {
    "phpunit/phpunit": "5.*|^6.3",
    "orchestra/testbench": "~3.4.0|~3.5.0"
  },
  "autoload": {
    "psr-4": {
      "Dummy\\\\DummyPackage\\\\": "src"
    }
  },
  "autoload-dev": {
    "psr-4": {
      "Dummy\\\\DummyPackage\\\\Test\\\\": "tests"
    }
  },
  "extra": {
    "laravel": {
      "providers": [
        "Dummy\\\\DummyPackage\\\\DummyPackageServiceProvider"
      ]
    }
  },
  "scripts": {
    "test": "vendor/bin/phpunit",
    "test:windows": "vendor\\\\bin\\\\phpunit"
  }
}';
