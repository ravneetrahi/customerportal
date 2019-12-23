phpcs:
=================================

PHP_CodeSniffer is a set of two PHP scripts; the main phpcs script that tokenizes PHP, JavaScript and CSS files to detect violations of a defined coding standard, and a second phpcbf script to automatically correct coding standard violations. PHP_CodeSniffer is an essential development tool that ensures your code remains clean and consistent.

## Installation

1 The easiest way to get started with PHP\_CodeSniffer is to download the [Phar](http://php.net/manual/en/intro.phar.php) files:

    curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
    php phpcs.phar -h

    curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar
    php phpcbf.phar -h

2 Copy the files to /bin

    sudo mv phpcs.phar /bin/phpcs
    sudo mv phpcbf.phar /bin/phpcbf

3 Make the files executable

    sudo chmod +x /bin/phpcs
    sudo chmod +x /bin/phpcbf

## phpcs commands.

The following commands are included:

| Task name:                     | Description:                                         |
| :----------------------------- | :--------------------------------------------------- |
| `phpcs -vvv`                   | Print verbose output                                 |
