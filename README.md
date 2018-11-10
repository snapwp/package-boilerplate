# Snap package boilerplate

This is a simple repository which can be used as a starting point when authoring your own packages for Snap.

## Included
The boilerplate includes:

* An example Service Provider
* An example of adding functions to global scope
* An example of adding Package config

### Composer Scripts
Included in the development dependencies are `squizlabs/php_codesniffer` and `friendsofphp/php-cs-fixer`.

The project has some handy composer scripts to keep your package's external API conformant with SnapWP standards.

Generally speaking SnapWP code is PSR2 standard, apart from enforcing snake case for classes, class methods, and functions - this is to maintain expected token signatures when within a WordPress context.

We also ensure all global scope functions are [fully qualified where possible](https://veewee.github.io/blog/optimizing-php-performance-by-fq-function-calls/) for performance reasons.

The included composer scripts are:

* `sniff` Highlights any SnapWP coding standard violations in your code.
* `fix` Attempts to fix any SnapWP coding standard violations.
* `sniff-docs` Highlights any WordPress docs standard violations, using a reduced ruleset.
* `fix-docs` Fixes any WordPress docs standard violations where possible.
