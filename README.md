#### Documentation Notice

Copying and distribution of this file, with or without modification, are permitted in any medium without royalty provided the copyright notice and this notice are preserved. This file is offered as-is, without any warranty.

# Dynamic Navigation Template

This template provides a minimal structure for single page PHP-based site navigation. It offers the advantage of partial loading, which saves on bandwidth, and a sensible URI scheme.

## Including Content

Page content is loaded via GET in URI parameters. For example, the `index.php` page has a variable `$page` which stores the GET parameter `page` so that if your URI is `index.php?page=home`, then it would fetch content associated with the value `home`. Content is fetched by using the [include function](http://php.net/manual/en/function.include.php) after a conditional check is made to the `$page` variable.

### !! WARNING !!

+ **DO NOT** use relative URIs
+ **DO** use predefined paths
+ **DO** use `dirname(__FILE__)`

Failure to heed to this warning may result in broken links when migrating from a testing to a production environment or when including content on multiple pages. Relative URIs in content pages are relative to the page they are included on. Attempting to fix this means making a conditional case for each page that includes your content. Instead, the page including the content should have a predefined path to the root directory so that an absolute path can be specified.

If using a hardcoded predefined path, instead of one generated from `dirname(__FILE__)`, be aware that your path in testing will probably be different from your path in production. In testing, the path may be something like `/var/www/html` while production might be something like `/home/u0123456/public_html`. So, you might use a debug switch to create a predefined path depending on whether you're in a testing or production environment.
