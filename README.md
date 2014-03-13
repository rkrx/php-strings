### Consistant multibyte function library for strings

### This lib is not yet production ready!

* Requires PHP 5.3+

### Designgoals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* An index always starts at 1, not at 0. So str\pos("Hello World", "Hello") returns 1 and if(str\pos("Hello World", "Hello")) is valid.