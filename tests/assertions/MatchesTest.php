<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class MatchesTest extends TestCase {
    public function testMatchesWithValidPatternAndString(): void {
        self::assertTrue(matches('hello world', '{hello}'));
    }

    public function testMatchesWithInvalidPattern(): void {
        self::assertFalse(matches('hello world', '{worlds}'));
    }

    public function testMatchesWithNullString(): void {
        self::assertFalse(matches(null, '{hello}'));
    }

    public function testMatchesWithNullPattern(): void {
        self::assertFalse(matches('hello world', null));
    }

    public function testMatchesWithBothNull(): void {
        self::assertFalse(matches(null, null));
    }

    public function testMatchesWithEmptyString(): void {
        self::assertFalse(matches('', '{hello}'));
    }

    public function testMatchesWithEmptyPattern(): void {
        self::assertFalse(matches('hello world', ''));
    }

    public function testMatchesWithSpecialCharacters(): void {
        self::assertTrue(matches('hello $world', '{\$world}'));
    }
}
