<?php

declare(strict_types=1);

namespace Psl\Str\Byte;

use Psl;

/**
 * @throws Psl\Exception\InvariantViolationException If the $offset is out-of-bounds.
 *
 * @psalm-pure
 */
function before_ci(
    string $haystack,
    string $needle,
    int $offset = 0
): ?string {
    $length = search_ci($haystack, $needle, $offset);
    if (null === $length) {
        return null;
    }

    return slice($haystack, 0, $length);
}