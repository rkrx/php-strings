<?php

namespace rkr\str;

/**
 * Normalize a string using a specified normalization form.
 *
 * @param string|null $string The string to normalize. When null, the result will be also null.
 * @param string $form The normalization form to use. Possible values: NFC, NFD, NFKC, NFKD.
 * @return string|null The normalized string or null, if the input was null.
 */
function normalize(?string $string, string $form): ?string {
	if(is_null($string)) {
		return null;
	}
	
	return normalizer_normalize($string, constant('Normalizer::' . $form));
}