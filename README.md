# Consistent multibyte function library for strings

## Design-goals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* Proper null handling.

## Functions

* <span style="color: gray;">\rkr\str\\</span>at($${\color{blue}string|null}$$ $string, $${\color{blue}int|null}$$ $position): string|null<br />Get the character at the specified position in a string.
* <span style="color: gray;">\rkr\str\\</span>bagDistance($${\color{blue}string|null}$$ $string1, $${\color{blue}string|null}$$ $string2): int|null<br />Calculate the bag distance between two strings.
* <span style="color: gray;">\rkr\str\\</span>capitalize($${\color{blue}string|null}$$ $string): string|null<br />Capitalize the first character of the string.
* <span style="color: gray;">\rkr\str\\</span>capitalizeWords($${\color{blue}string|null}$$ $string): string|null<br />Capitalize the first letter of each word in a string.
* <span style="color: gray;">\rkr\str\\</span>characters($${\color{blue}string|null}$$ $string): array|null<br />Get the Unicode characters of a string.
* <span style="color: gray;">\rkr\str\\</span>chunk($${\color{blue}string|null}$$ $string, $${\color{blue}int}$$ $length): array|null<br />Splits a string into chunks of the given length.
* <span style="color: gray;">\rkr\str\\</span>contains($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle): bool<br />Check if a string contains another string.
* <span style="color: gray;">\rkr\str\\</span>duplicate($${\color{blue}string|null}$$ $string, $${\color{blue}int}$$ $times): string|null<br />Duplicate a string a given number of times.
* <span style="color: gray;">\rkr\str\\</span>endsWith($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle): bool<br />Checks if the haystack ends with the needle.
* <span style="color: gray;">\rkr\str\\</span>equals($${\color{blue}string|null}$$ $string1, $${\color{blue}string|null}$$ $string2): bool<br />Asserts that a string is equal to another string.
* <span style="color: gray;">\rkr\str\\</span>first($${\color{blue}string|null}$$ $string): string|null<br />Get the first character of a string.
* <span style="color: gray;">\rkr\str\\</span>indexOf($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle, $${\color{blue}int}$$ $offset): int|null<br />Finds the position of the first occurrence of a substring in a string.
* <span style="color: gray;">\rkr\str\\</span>jaroDistance($${\color{blue}string|null}$$ $string1, $${\color{blue}string|null}$$ $string2): float|null<br />Calculate the Jaro distance between two strings.
* <span style="color: gray;">\rkr\str\\</span>last($${\color{blue}string|null}$$ $string): string|null<br />Get the last character of a string.
* <span style="color: gray;">\rkr\str\\</span>lastIndexOf($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle, $${\color{blue}int}$$ $offset): int|null<br />Find the last occurrence of a string in another string.
* <span style="color: gray;">\rkr\str\\</span>length($${\color{blue}string|null}$$ $string): int|null<br />Get the length of the string.
* <span style="color: gray;">\rkr\str\\</span>lower($${\color{blue}string|null}$$ $string): string|null<br />Converts a string to lowercase.
* <span style="color: gray;">\rkr\str\\</span>matches($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $pattern): bool<br />Check if a string matches a regular expression pattern.
* <span style="color: gray;">\rkr\str\\</span>myersDifference($${\color{blue}string|null}$$ $string1, $${\color{blue}string|null}$$ $string2): int|null<br />Calculate the Myers difference between two strings.
* <span style="color: gray;">\rkr\str\\</span>normalize($${\color{blue}string|null}$$ $string, $${\color{blue}string}$$ $form): string|null<br />Normalize a string using a specified normalization form.
* <span style="color: gray;">\rkr\str\\</span>padLeading($${\color{blue}string|null}$$ $string, $${\color{blue}int}$$ $length, $${\color{blue}string|null}$$ $substring): string|null<br />Pads the given string on the left side to the specified length with the specified character.
* <span style="color: gray;">\rkr\str\\</span>padTrailing($${\color{blue}string|null}$$ $string, $${\color{blue}positive-int}$$ $length, $${\color{blue}string}$$ $char): string|null<br />Pads the given string to the specified length with the given character.
* <span style="color: gray;">\rkr\str\\</span>replace($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle, $${\color{blue}string|null}$$ $replacement): string|null<br />Replace all occurrences of the needle in the haystack with the replacement.
* <span style="color: gray;">\rkr\str\\</span>replaceFirst($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle, $${\color{blue}string|null}$$ $replacement): string|null<br />Replace the first occurrence of a needle in the haystack with a replacement.
* <span style="color: gray;">\rkr\str\\</span>replaceLast($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle, $${\color{blue}string|null}$$ $replacement): string|null<br />Replaces all occurrences of a string in another string.
* <span style="color: gray;">\rkr\str\\</span>replacePrefix($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $prefix, $${\color{blue}string|null}$$ $replacement): string|null<br />Replace the prefix of a string with another string.
* <span style="color: gray;">\rkr\str\\</span>replaceSuffix($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $suffix, $${\color{blue}string|null}$$ $replacement): string|null<br />Replaces the suffix of a string.
* <span style="color: gray;">\rkr\str\\</span>reverse($${\color{blue}string|null}$$ $string): string|null<br />Reverse a given string.
* <span style="color: gray;">\rkr\str\\</span>shift($${\color{blue}string|null}$$ $string, $${\color{blue}positive-int}$$ $length): null|array{: string, : string}<br />Shifts a string by a given length.
* <span style="color: gray;">\rkr\str\\</span>startsWith($${\color{blue}string|null}$$ $haystack, $${\color{blue}string|null}$$ $needle): bool<br />Checks if the haystack starts with the needle.
* <span style="color: gray;">\rkr\str\\</span>substr($${\color{blue}string|null}$$ $string, $${\color{blue}int}$$ $start, $${\color{blue}int|null}$$ $length): string|null<br />Get a substring of a string.
* <span style="color: gray;">\rkr\str\\</span>trim($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $chars <span style="color: gray;">= null</span>): string|null<br />Trims the given string by removing the specified characters from the beginning and the end.
* <span style="color: gray;">\rkr\str\\</span>trimLeft($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $chars <span style="color: gray;">= null</span>): string|null<br />Trims the specified characters from the beginning of the string.
* <span style="color: gray;">\rkr\str\\</span>trimRight($${\color{blue}string|null}$$ $string, $${\color{blue}string|null}$$ $chars <span style="color: gray;">= null</span>): string|null<br />Trims the specified characters from the end of the string.
* <span style="color: gray;">\rkr\str\\</span>upper($${\color{blue}string|null}$$ $string): string|null<br />Convert a string to uppercase.
