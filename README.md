[![Build Status](https://travis-ci.org/thomaslorentsen/php-valid-json.svg?branch=master)](https://travis-ci.org/thomaslorentsen/php-valid-json)
# PHP Valid JSON
A Unit Test suite of what JSON is valid in PHP.

## JSON that throws an exception in PHP7
Passing null into ```json_decode``` results in an error
```php
json_decode(null)
```
