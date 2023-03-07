<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Uuid;

use Swaggest\ShopwareSdk\Exception\InvalidUuidException;
use Swaggest\ShopwareSdk\Exception\InvalidUuidLengthException;

/**
 * Copyright 2019 shopware AG
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
 * persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 * THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
class Uuid
{
    /**
     * Regular expression pattern for matching a valid UUID of any variant.
     */
    public const VALID_PATTERN = '^[0-9a-f]{32}$';

    public static function randomHex(): string
    {
        $hex = \bin2hex(\random_bytes(16));
        $timeHi = self::applyVersion(\mb_substr($hex, 12, 4), 4);
        $clockSeqHi = self::applyVariant(\hexdec(\mb_substr($hex, 16, 2)));

        return sprintf(
            '%08s%04s%04s%02s%02s%012s',
            // time low
            \mb_substr($hex, 0, 8),
            // time mid
            \mb_substr($hex, 8, 4),
            // time high and version
            \str_pad(\dechex($timeHi), 4, '0', \STR_PAD_LEFT),
            // clk_seq_hi_res
            \str_pad(\dechex($clockSeqHi), 2, '0', \STR_PAD_LEFT),
            // clock_seq_low
            \mb_substr($hex, 18, 2),
            // node
            \mb_substr($hex, 20, 12)
        );
    }

    public static function randomBytes(): string
    {
        return hex2bin(self::randomHex());
    }

    public static function fromBytesToHex(string $bytes): string
    {
        if (\mb_strlen($bytes, '8bit') !== 16) {
            throw new InvalidUuidLengthException(\mb_strlen($bytes, '8bit'), \bin2hex($bytes));
        }
        $uuid = \bin2hex($bytes);

        if (!self::isValid($uuid)) {
            throw new InvalidUuidException($uuid);
        }

        return $uuid;
    }

    public static function fromBytesToHexList(array $bytesList): array
    {
        $converted = [];
        foreach ($bytesList as $key => $bytes) {
            $converted[$key] = self::fromBytesToHex($bytes);
        }

        return $converted;
    }

    public static function fromHexToBytesList(array $uuids): array
    {
        $converted = [];
        foreach ($uuids as $key => $uuid) {
            $converted[$key] = self::fromHexToBytes($uuid);
        }

        return $converted;
    }

    public static function fromHexToBytes(string $uuid): string
    {
        if ($bin = @\hex2bin($uuid)) {
            return $bin;
        }

        throw new InvalidUuidException($uuid);
    }

    /**
     * Generates a md5 binary, to hash the string and returns a UUID in hex
     */
    public static function fromStringToHex(string $string): string
    {
        return self::fromBytesToHex(md5($string, true));
    }

    public static function isValid(string $id): bool
    {
        return !(!preg_match('/' . self::VALID_PATTERN . '/', $id));
    }

    private static function applyVersion(string $timeHi, int $version): int
    {
        $timeHi = \hexdec($timeHi) & 0x0FFF;
        $timeHi &= ~0xF000;
        $timeHi |= $version << 12;

        return $timeHi;
    }

    private static function applyVariant(int $clockSeqHi): int
    {
        // Set the variant to RFC 4122
        $clockSeqHi &= 0x3F;
        $clockSeqHi &= ~0xC0;
        $clockSeqHi |= 0x80;

        return $clockSeqHi;
    }
}
