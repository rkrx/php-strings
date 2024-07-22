# Consistent multibyte function library for strings

## Design-goals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* Proper null handling.

## Functions

* ${\color{lightblue}\rkr\str\\}$at(${\color{blue}string|null}$ $string, ${\color{blue}int|null}$ $position): string|null<br />Get the character at the specified position in a string.
* ${\color{lightblue}\rkr\str\\}$bagDistance(${\color{blue}string|null}$ $string1, ${\color{blue}string|null}$ $string2): int|null<br />Calculate the bag distance between two strings.
* ${\color{lightblue}\rkr\str\\}$capitalize(${\color{blue}string|null}$ $string): string|null<br />Capitalize the first character of the string.
* ${\color{lightblue}\rkr\str\\}$capitalizeWords(${\color{blue}string|null}$ $string): string|null<br />Capitalize the first letter of each word in a string.
* ${\color{lightblue}\rkr\str\\}$characters(${\color{blue}string|null}$ $string): array|null<br />Get the Unicode characters of a string.
* ${\color{lightblue}\rkr\str\\}$chunk(${\color{blue}string|null}$ $string, ${\color{blue}int}$ $length): array|null<br />Splits a string into chunks of the given length.
* ${\color{lightblue}\rkr\str\\}$contains(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle): bool<br />Check if a string contains another string.
* ${\color{lightblue}\rkr\str\\}$duplicate(${\color{blue}string|null}$ $string, ${\color{blue}int}$ $times): string|null<br />Duplicate a string a given number of times.
* ${\color{lightblue}\rkr\str\\}$endsWith(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle): bool<br />Checks if the haystack ends with the needle.
* ${\color{lightblue}\rkr\str\\}$equals(${\color{blue}string|null}$ $string1, ${\color{blue}string|null}$ $string2): bool<br />Asserts that a string is equal to another string.
* ${\color{lightblue}\rkr\str\\}$first(${\color{blue}string|null}$ $string): string|null<br />Get the first character of a string.
* ${\color{lightblue}\rkr\str\\}$indexOf(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle, ${\color{blue}int}$ $offset): int|null<br />Finds the position of the first occurrence of a substring in a string.
* ${\color{lightblue}\rkr\str\\}$jaroDistance(${\color{blue}string|null}$ $string1, ${\color{blue}string|null}$ $string2): float|null<br />Calculate the Jaro distance between two strings.
* ${\color{lightblue}\rkr\str\\}$last(${\color{blue}string|null}$ $string): string|null<br />Get the last character of a string.
* ${\color{lightblue}\rkr\str\\}$lastIndexOf(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle, ${\color{blue}int}$ $offset): int|null<br />Find the last occurrence of a string in another string.
* ${\color{lightblue}\rkr\str\\}$length(${\color{blue}string|null}$ $string): int|null<br />Get the length of the string.
* ${\color{lightblue}\rkr\str\\}$lower(${\color{blue}string|null}$ $string): string|null<br />Converts a string to lowercase.
* ${\color{lightblue}\rkr\str\\}$matches(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $pattern): bool<br />Check if a string matches a regular expression pattern.
* ${\color{lightblue}\rkr\str\\}$myersDifference(${\color{blue}string|null}$ $string1, ${\color{blue}string|null}$ $string2): int|null<br />Calculate the Myers difference between two strings.
* ${\color{lightblue}\rkr\str\\}$normalize(${\color{blue}string|null}$ $string, ${\color{blue}string}$ $form): string|null<br />Normalize a string using a specified normalization form.
* ${\color{lightblue}\rkr\str\\}$padLeading(${\color{blue}string|null}$ $string, ${\color{blue}int}$ $length, ${\color{blue}string|null}$ $substring): string|null<br />Pads the given string on the left side to the specified length with the specified character.
* ${\color{lightblue}\rkr\str\\}$padTrailing(${\color{blue}string|null}$ $string, ${\color{blue}positive-int}$ $length, ${\color{blue}string}$ $char): string|null<br />Pads the given string to the specified length with the given character.
* ${\color{lightblue}\rkr\str\\}$replace(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle, ${\color{blue}string|null}$ $replacement): string|null<br />Replace all occurrences of the needle in the haystack with the replacement.
* ${\color{lightblue}\rkr\str\\}$replaceFirst(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle, ${\color{blue}string|null}$ $replacement): string|null<br />Replace the first occurrence of a needle in the haystack with a replacement.
* ${\color{lightblue}\rkr\str\\}$replaceLast(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle, ${\color{blue}string|null}$ $replacement): string|null<br />Replaces all occurrences of a string in another string.
* ${\color{lightblue}\rkr\str\\}$replacePrefix(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $prefix, ${\color{blue}string|null}$ $replacement): string|null<br />Replace the prefix of a string with another string.
* ${\color{lightblue}\rkr\str\\}$replaceSuffix(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $suffix, ${\color{blue}string|null}$ $replacement): string|null<br />Replaces the suffix of a string.
* ${\color{lightblue}\rkr\str\\}$reverse(${\color{blue}string|null}$ $string): string|null<br />Reverse a given string.
* ${\color{lightblue}\rkr\str\\}$shift(${\color{blue}string|null}$ $string, ${\color{blue}positive-int}$ $length): null|array{: string, : string}<br />Shifts a string by a given length.
* ${\color{lightblue}\rkr\str\\}$startsWith(${\color{blue}string|null}$ $haystack, ${\color{blue}string|null}$ $needle): bool<br />Checks if the haystack starts with the needle.
* ${\color{lightblue}\rkr\str\\}$substr(${\color{blue}string|null}$ $string, ${\color{blue}int}$ $start, ${\color{blue}int|null}$ $length): string|null<br />Get a substring of a string.
* ${\color{lightblue}\rkr\str\\}$trim(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $chars ${\color{lightblue}null}$): string|null<br />Trims the given string by removing the specified characters from the beginning and the end.
* ${\color{lightblue}\rkr\str\\}$trimLeft(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $chars ${\color{lightblue}null}$): string|null<br />Trims the specified characters from the beginning of the string.
* ${\color{lightblue}\rkr\str\\}$trimRight(${\color{blue}string|null}$ $string, ${\color{blue}string|null}$ $chars ${\color{lightblue}null}$): string|null<br />Trims the specified characters from the end of the string.
* ${\color{lightblue}\rkr\str\\}$upper(${\color{blue}string|null}$ $string): string|null<br />Convert a string to uppercase.
