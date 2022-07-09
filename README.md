# DEMO-PACKAGE-PYTHON 
This is a sample package which follows the instructions 
for publishing a PHP package to Packagist and installing it using Composer. 

This repository can be used as a template for building packages. 
See section `Reusing as Template` for more info on how.

## Outline 
This `README.md` file is organized as follows: 

1. Outline 
2. Full Instructions 
3. Summarized/Compact Instructions
4. Code Structure 
5. Demo Package Installation Instructions
6. Reusing as Template
7. Adding Additional Files

## Full Instructions 
Full instructions for publishing a Python package using 
PyPI can be found here: 
https://packaging.python.org/en/latest/tutorials/packaging-projects/

I made a `tinyurl.com` shortlinks for the 
tutorial link above:

https://tinyurl.com/how-to-package-php

If you want, you can include the links above to your
bookmarks.

## Summarized/Compact Instructions 
In summary the insructions can be divided into the outline below
if you don't feel clicking the tutorial link again and again.

Full instructions can be found in the tutorials above in case 
the summary doesn't still help in recall.

1. Creating a Package 
    1. Create directory for package 
    1. Create `composer.json` file with the following details. 
        1. name
        1. description
        1. type
        1. license
        1. authors 
        1. minimum-stability
        1. autoload
        1. require
    1. Connect and upload to a Git (GitLab, Github, or BitBucket) repo.
    1. Upload the package to Packagist using Git Repo.

## Code Structure 

```bash
demo-package-php
    src/                    # Source Files of the Package
        DemoPackage.php 
    tests/                  # Package Tests 
        main.php
    vendor/                 # Framework Files
    LICENSE                 # License File (MIT)
    README.md               # This file 
```

## Demo Package Installation Instructions
The demo package has a simple API of 3 functions. 

* `->sayHelloWorld()`
* `->sayHi(name)`
* `->randomRainbowColor()` - uses the `faker` package 

To use this package: 
`composer require demo-package/demo-package-php`

Then: 
```php
<?php
require_once "vendor/autoload.php"; 

use DemoPackagePHP\DemoPackage;

$demo_package = new DemoPackage();

print("->sayHello() => " . demo_package.sayHelloWorld()); 
print("->sayHi('John') => " . demo_package.sayHi('John'));
print("->randomRainbowColor() => " . demo_package.randomRainbowColor());
```
It should return the following: 
```
->sayHello() => Hello, World! 
->sayHi('John') => Hi, John!
->randomRainbowColor() => blue
```

## Reusing as Template
If you intend to reuse this package as a template for future package projects, use the following command: 

1. `git clone https://gitlab.com/demo-package/demo-package-php.git`
1. Edit `package.json` to suit your project's specifications. 
1. Modify the project as necessary
1. Connect to a Git (GitLab, Github, and/or Bitbucket) Repo
1. Upload and publish to Packagist via Git Repo.