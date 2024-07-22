# Consistent multibyte function library for strings

## Design-goals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* Proper null handling.

## Functions

* \rkr\str\\**at**(_string|null_ **string**, _int|null_ **position**): _string|null_<br />_Get the character at the specified position in a string._
* \rkr\str\\**bagDistance**(_string|null_ **string1**, _string|null_ **string2**): _int|null_<br />_Calculate the bag distance between two strings._
* \rkr\str\\**capitalize**(_string|null_ **string**): _string|null_<br />_Capitalize the first character of the string._
* \rkr\str\\**capitalizeWords**(_string|null_ **string**): _string|null_<br />_Capitalize the first letter of each word in a string._
* \rkr\str\\**characters**(_string|null_ **string**): _array|null_<br />_Get the Unicode characters of a string._
* \rkr\str\\**chunk**(_string|null_ **string**, _int_ **length**): _array|null_<br />_Splits a string into chunks of the given length._
* \rkr\str\\**contains**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Check if a string contains another string._
* \rkr\str\\**duplicate**(_string|null_ **string**, _int_ **times**): _string|null_<br />_Duplicate a string a given number of times._
* \rkr\str\\**endsWith**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Checks if the haystack ends with the needle._
* \rkr\str\\**equals**(_string|null_ **string1**, _string|null_ **string2**): _bool_<br />_Asserts that a string is equal to another string._
* \rkr\str\\**first**(_string|null_ **string**): _string|null_<br />_Get the first character of a string._
* \rkr\str\\**indexOf**(_string|null_ **haystack**, _string|null_ **needle**, _int_ **offset**): _int|null_<br />_Finds the position of the first occurrence of a substring in a string._
* \rkr\str\\**jaroDistance**(_string|null_ **string1**, _string|null_ **string2**): _float|null_<br />_Calculate the Jaro distance between two strings._
* \rkr\str\\**last**(_string|null_ **string**): _string|null_<br />_Get the last character of a string._
* \rkr\str\\**lastIndexOf**(_string|null_ **haystack**, _string|null_ **needle**, _int_ **offset**): _int|null_<br />_Find the last occurrence of a string in another string._
* \rkr\str\\**length**(_string|null_ **string**): _int|null_<br />_Get the length of the string._
* \rkr\str\\**lower**(_string|null_ **string**): _string|null_<br />_Converts a string to lowercase._
* \rkr\str\\**matches**(_string|null_ **string**, _string|null_ **pattern**): _bool_<br />_Check if a string matches a regular expression pattern._
* \rkr\str\\**myersDifference**(_string|null_ **string1**, _string|null_ **string2**): _int|null_<br />_Calculate the Myers difference between two strings._
* \rkr\str\\**normalize**(_string|null_ **string**, _string_ **form**): _string|null_<br />_Normalize a string using a specified normalization form._
* \rkr\str\\**padLeading**(_string|null_ **string**, _int_ **length**, _string|null_ **substring**): _string|null_<br />_Pads the given string on the left side to the specified length with the specified character._
* \rkr\str\\**padTrailing**(_string|null_ **string**, _positive-int_ **length**, _string_ **char**): _string|null_<br />_Pads the given string to the specified length with the given character._
* \rkr\str\\**replace**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replace all occurrences of the needle in the haystack with the replacement._
* \rkr\str\\**replaceFirst**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replace the first occurrence of a needle in the haystack with a replacement._
* \rkr\str\\**replaceLast**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replaces all occurrences of a string in another string._
* \rkr\str\\**replacePrefix**(_string|null_ **string**, _string|null_ **prefix**, _string|null_ **replacement**): _string|null_<br />_Replace the prefix of a string with another string._
* \rkr\str\\**replaceSuffix**(_string|null_ **string**, _string|null_ **suffix**, _string|null_ **replacement**): _string|null_<br />_Replaces the suffix of a string._
* \rkr\str\\**reverse**(_string|null_ **string**): _string|null_<br />_Reverse a given string._
* \rkr\str\\**shift**(_string|null_ **string**, _positive-int_ **length**): _null|array{: string, : string}_<br />_Shifts a string by a given length._
* \rkr\str\\**startsWith**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Checks if the haystack starts with the needle._
* \rkr\str\\**substr**(_string|null_ **string**, _int_ **start**, _int|null_ **length**): _string|null_<br />_Get a substring of a string._
* \rkr\str\\**trim**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the given string by removing the specified characters from the beginning and the end._
* \rkr\str\\**trimLeft**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the specified characters from the beginning of the string._
* \rkr\str\\**trimRight**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the specified characters from the end of the string._
* \rkr\str\\**upper**(_string|null_ **string**): _string|null_<br />_Convert a string to uppercase._
