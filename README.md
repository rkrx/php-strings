# Consistent multibyte function library for strings

## Design-goals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* Proper null handling.

## Functions

* <span style="color: gray;">\rkr\str\\</span>at(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">int|null</span> $position): string|null<br />Get the character at the specified position in a string.
* <span style="color: gray;">\rkr\str\\</span>bagDistance(<span style="color: dodgerblue;">string|null</span> $string1, <span style="color: dodgerblue;">string|null</span> $string2): int|null<br />Calculate the bag distance between two strings.
* <span style="color: gray;">\rkr\str\\</span>capitalize(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Capitalize the first character of the string.
* <span style="color: gray;">\rkr\str\\</span>capitalizeWords(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Capitalize the first letter of each word in a string.
* <span style="color: gray;">\rkr\str\\</span>characters(<span style="color: dodgerblue;">string|null</span> $string): array|null<br />Get the Unicode characters of a string.
* <span style="color: gray;">\rkr\str\\</span>chunk(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">int</span> $length): array|null<br />Splits a string into chunks of the given length.
* <span style="color: gray;">\rkr\str\\</span>contains(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle): bool<br />Check if a string contains another string.
* <span style="color: gray;">\rkr\str\\</span>duplicate(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">int</span> $times): string|null<br />Duplicate a string a given number of times.
* <span style="color: gray;">\rkr\str\\</span>endsWith(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle): bool<br />Checks if the haystack ends with the needle.
* <span style="color: gray;">\rkr\str\\</span>equals(<span style="color: dodgerblue;">string|null</span> $string1, <span style="color: dodgerblue;">string|null</span> $string2): bool<br />Asserts that a string is equal to another string.
* <span style="color: gray;">\rkr\str\\</span>first(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Get the first character of a string.
* <span style="color: gray;">\rkr\str\\</span>indexOf(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle, <span style="color: dodgerblue;">int</span> $offset): int|null<br />Finds the position of the first occurrence of a substring in a string.
* <span style="color: gray;">\rkr\str\\</span>jaroDistance(<span style="color: dodgerblue;">string|null</span> $string1, <span style="color: dodgerblue;">string|null</span> $string2): float|null<br />Calculate the Jaro distance between two strings.
* <span style="color: gray;">\rkr\str\\</span>last(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Get the last character of a string.
* <span style="color: gray;">\rkr\str\\</span>lastIndexOf(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle, <span style="color: dodgerblue;">int</span> $offset): int|null<br />Find the last occurrence of a string in another string.
* <span style="color: gray;">\rkr\str\\</span>length(<span style="color: dodgerblue;">string|null</span> $string): int|null<br />Get the length of the string.
* <span style="color: gray;">\rkr\str\\</span>lower(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Converts a string to lowercase.
* <span style="color: gray;">\rkr\str\\</span>matches(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $pattern): bool<br />Check if a string matches a regular expression pattern.
* <span style="color: gray;">\rkr\str\\</span>myersDifference(<span style="color: dodgerblue;">string|null</span> $string1, <span style="color: dodgerblue;">string|null</span> $string2): int|null<br />Calculate the Myers difference between two strings.
* <span style="color: gray;">\rkr\str\\</span>normalize(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string</span> $form): string|null<br />Normalize a string using a specified normalization form.
* <span style="color: gray;">\rkr\str\\</span>padLeading(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">int</span> $length, <span style="color: dodgerblue;">string|null</span> $substring): string|null<br />Pads the given string on the left side to the specified length with the specified character.
* <span style="color: gray;">\rkr\str\\</span>padTrailing(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">positive-int</span> $length, <span style="color: dodgerblue;">string</span> $char): string|null<br />Pads the given string to the specified length with the given character.
* <span style="color: gray;">\rkr\str\\</span>replace(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle, <span style="color: dodgerblue;">string|null</span> $replacement): string|null<br />Replace all occurrences of the needle in the haystack with the replacement.
* <span style="color: gray;">\rkr\str\\</span>replaceFirst(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle, <span style="color: dodgerblue;">string|null</span> $replacement): string|null<br />Replace the first occurrence of a needle in the haystack with a replacement.
* <span style="color: gray;">\rkr\str\\</span>replaceLast(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle, <span style="color: dodgerblue;">string|null</span> $replacement): string|null<br />Replaces all occurrences of a string in another string.
* <span style="color: gray;">\rkr\str\\</span>replacePrefix(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $prefix, <span style="color: dodgerblue;">string|null</span> $replacement): string|null<br />Replace the prefix of a string with another string.
* <span style="color: gray;">\rkr\str\\</span>replaceSuffix(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $suffix, <span style="color: dodgerblue;">string|null</span> $replacement): string|null<br />Replaces the suffix of a string.
* <span style="color: gray;">\rkr\str\\</span>reverse(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Reverse a given string.
* <span style="color: gray;">\rkr\str\\</span>shift(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">positive-int</span> $length): null|array{: string, : string}<br />Shifts a string by a given length.
* <span style="color: gray;">\rkr\str\\</span>startsWith(<span style="color: dodgerblue;">string|null</span> $haystack, <span style="color: dodgerblue;">string|null</span> $needle): bool<br />Checks if the haystack starts with the needle.
* <span style="color: gray;">\rkr\str\\</span>substr(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">int</span> $start, <span style="color: dodgerblue;">int|null</span> $length): string|null<br />Get a substring of a string.
* <span style="color: gray;">\rkr\str\\</span>trim(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $chars <span style="color: gray;">= null</span>): string|null<br />Trims the given string by removing the specified characters from the beginning and the end.
* <span style="color: gray;">\rkr\str\\</span>trimLeft(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $chars <span style="color: gray;">= null</span>): string|null<br />Trims the specified characters from the beginning of the string.
* <span style="color: gray;">\rkr\str\\</span>trimRight(<span style="color: dodgerblue;">string|null</span> $string, <span style="color: dodgerblue;">string|null</span> $chars <span style="color: gray;">= null</span>): string|null<br />Trims the specified characters from the end of the string.
* <span style="color: gray;">\rkr\str\\</span>upper(<span style="color: dodgerblue;">string|null</span> $string): string|null<br />Convert a string to uppercase.
