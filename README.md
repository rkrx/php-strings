# Consistent multibyte function library for strings

## Design-goals

* Consistent interface.
* All names are lowerCamelCase.
* Required parameters are always at the beginning.
* Homogeneous parameters follow conventions: $haystack is always before $needle.
* Proper null handling.

## Functions

* **at**<br />\rkr\str\\**at**(_string|null_ **string**, _int|null_ **position**): _string|null_<br />_Get the character at the specified position in a string._
* **bagDistance**<br />\rkr\str\\**bagDistance**(_string|null_ **string1**, _string|null_ **string2**): _int|null_<br />_Calculate the bag distance between two strings._
* **capitalize**<br />\rkr\str\\**capitalize**(_string|null_ **string**): _string|null_<br />_Capitalize the first character of the string._
* **capitalizeWords**<br />\rkr\str\\**capitalizeWords**(_string|null_ **string**): _string|null_<br />_Capitalize the first letter of each word in a string._
* **characters**<br />\rkr\str\\**characters**(_string|null_ **string**): _array|null_<br />_Get the Unicode characters of a string._
* **chunk**<br />\rkr\str\\**chunk**(_string|null_ **string**, _int_ **length**): _array|null_<br />_Splits a string into chunks of the given length._
* **contains**<br />\rkr\str\\**contains**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Check if a string contains another string._
* **duplicate**<br />\rkr\str\\**duplicate**(_string|null_ **string**, _int_ **times**): _string|null_<br />_Duplicate a string a given number of times._
* **endsWith**<br />\rkr\str\\**endsWith**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Checks if the haystack ends with the needle._
* **equals**<br />\rkr\str\\**equals**(_string|null_ **string1**, _string|null_ **string2**): _bool_<br />_Asserts that a string is equal to another string._
* **first**<br />\rkr\str\\**first**(_string|null_ **string**): _string|null_<br />_Get the first character of a string._
* **indexOf**<br />\rkr\str\\**indexOf**(_string|null_ **haystack**, _string|null_ **needle**, _int_ **offset**): _int|null_<br />_Finds the position of the first occurrence of a substring in a string._
* **jaroDistance**<br />\rkr\str\\**jaroDistance**(_string|null_ **string1**, _string|null_ **string2**): _float|null_<br />_Calculate the Jaro distance between two strings._
* **last**<br />\rkr\str\\**last**(_string|null_ **string**): _string|null_<br />_Get the last character of a string._
* **lastIndexOf**<br />\rkr\str\\**lastIndexOf**(_string|null_ **haystack**, _string|null_ **needle**, _int_ **offset**): _int|null_<br />_Find the last occurrence of a string in another string._
* **length**<br />\rkr\str\\**length**(_string|null_ **string**): _int|null_<br />_Get the length of the string._
* **lower**<br />\rkr\str\\**lower**(_string|null_ **string**): _string|null_<br />_Converts a string to lowercase._
* **matches**<br />\rkr\str\\**matches**(_string|null_ **string**, _string|null_ **pattern**): _bool_<br />_Check if a string matches a regular expression pattern._
* **myersDifference**<br />\rkr\str\\**myersDifference**(_string|null_ **string1**, _string|null_ **string2**): _int|null_<br />_Calculate the Myers difference between two strings._
* **normalize**<br />\rkr\str\\**normalize**(_string|null_ **string**, _string_ **form**): _string|null_<br />_Normalize a string using a specified normalization form._
* **padLeading**<br />\rkr\str\\**padLeading**(_string|null_ **string**, _int_ **length**, _string|null_ **substring**): _string|null_<br />_Pads the given string on the left side to the specified length with the specified character._
* **padTrailing**<br />\rkr\str\\**padTrailing**(_string|null_ **string**, _positive-int_ **length**, _string_ **char**): _string|null_<br />_Pads the given string to the specified length with the given character._
* **replace**<br />\rkr\str\\**replace**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replace all occurrences of the needle in the haystack with the replacement._
* **replaceFirst**<br />\rkr\str\\**replaceFirst**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replace the first occurrence of a needle in the haystack with a replacement._
* **replaceLast**<br />\rkr\str\\**replaceLast**(_string|null_ **haystack**, _string|null_ **needle**, _string|null_ **replacement**): _string|null_<br />_Replaces all occurrences of a string in another string._
* **replacePrefix**<br />\rkr\str\\**replacePrefix**(_string|null_ **string**, _string|null_ **prefix**, _string|null_ **replacement**): _string|null_<br />_Replace the prefix of a string with another string._
* **replaceSuffix**<br />\rkr\str\\**replaceSuffix**(_string|null_ **string**, _string|null_ **suffix**, _string|null_ **replacement**): _string|null_<br />_Replaces the suffix of a string._
* **reverse**<br />\rkr\str\\**reverse**(_string|null_ **string**): _string|null_<br />_Reverse a given string._
* **shift**<br />\rkr\str\\**shift**(_string|null_ **string**, _positive-int_ **length**): _null|array{: string, : string}_<br />_Shifts a string by a given length._
* **startsWith**<br />\rkr\str\\**startsWith**(_string|null_ **haystack**, _string|null_ **needle**): _bool_<br />_Checks if the haystack starts with the needle._
* **substr**<br />\rkr\str\\**substr**(_string|null_ **string**, _int_ **start**, _int|null_ **length**): _string|null_<br />_Get a substring of a string._
* **trim**<br />\rkr\str\\**trim**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the given string by removing the specified characters from the beginning and the end._
* **trimLeft**<br />\rkr\str\\**trimLeft**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the specified characters from the beginning of the string._
* **trimRight**<br />\rkr\str\\**trimRight**(_string|null_ **string**, _string|null_ **chars** _null_): _string|null_<br />_Trims the specified characters from the end of the string._
* **upper**<br />\rkr\str\\**upper**(_string|null_ **string**): _string|null_<br />_Convert a string to uppercase._
