<?php

declare(strict_types=1);

namespace ITCrackers\Helper;

class Masking
{
    public static function demo()
    {
        return "~Hello From IT Crackers Masking Package~";
    }
    /**
     * Mask Mobile Number
     * Example: 9876543210 => 98******10
     */
    public static function maskMobile(string $mobile): string
    {
        if (strlen($mobile) < 4) {
            return $mobile;
        }

        return substr($mobile, 0, 2)
            . str_repeat('*', strlen($mobile) - 4)
            . substr($mobile, -2);
    }

    /**
     * Mask Email
     * Example: rock@gmail.com => ro**@gmail.com
     */
    public static function maskEmail(string $email): string
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        }

        [$username, $domain] = explode('@', $email);

        if (strlen($username) <= 2) {
            $masked = substr($username, 0, 1) . '*';
        } else {
            $masked = substr($username, 0, 2)
                . str_repeat('*', strlen($username) - 2);
        }

        return $masked . '@' . $domain;
    }

    /**
     * Mask Aadhaar Number
     * Example: 123412341234 => XXXXXXXX1234
     */
    public static function maskAadhaar(string $aadhaar): string
    {
        if (strlen($aadhaar) != 12) {
            return $aadhaar;
        }

        return str_repeat('X', 8) . substr($aadhaar, -4);
    }

    /**
     * Mask PAN
     * Example: ABCDE1234F => AB*****34F
     */
    public static function maskPAN(string $pan): string
    {
        if (strlen($pan) != 10) {
            return $pan;
        }

        return substr($pan, 0, 2)
            . '*****'
            . substr($pan, -3);
    }

    /**
     * Mask IFSC
     * Example: SBIN0001234 => SBIN****234
     */
    public static function maskIFSC(string $ifsc): string
    {
        if (strlen($ifsc) < 7) {
            return $ifsc;
        }

        return substr($ifsc, 0, 4)
            . '****'
            . substr($ifsc, -3);
    }

    /**
     * Mask Bank Account
     * Example: 1234567890123456 => XXXXXXXXXXXX3456
     */
    public static function maskAccount(string $account): string
    {
        if (strlen($account) < 5) {
            return $account;
        }

        return str_repeat('X', strlen($account) - 4)
            . substr($account, -4);
    }

    /**
     * Mask Credit Card
     * Example: 4111111111111111 => XXXX-XXXX-XXXX-1111
     */
    public static function maskCreditCard(string $card): string
    {
        $card = preg_replace('/\D/', '', $card);

        if (strlen($card) != 16) {
            return $card;
        }

        return 'XXXX-XXXX-XXXX-' . substr($card, -4);
    }

    /**
     * Mask Passport
     * Example: A1234567 => A*****67
     */
    public static function maskPassport(string $passport): string
    {
        if (strlen($passport) < 4) {
            return $passport;
        }

        return substr($passport, 0, 1)
            . str_repeat('*', strlen($passport) - 3)
            . substr($passport, -2);
    }

    /**
     * Mask Name
     * Example: Rakesh Kumar => R***** K****
     */
    public static function maskName(string $name): string
    {
        $words = explode(' ', trim($name));

        foreach ($words as &$word) {
            if (strlen($word) > 1) {
                $word = substr($word, 0, 1)
                    . str_repeat('*', strlen($word) - 1);
            }
        }

        return implode(' ', $words);
    }

    /**
     * Custom Mask
     *
     * Example:
     * maskCustom('9876543210',2,2,'*')
     * Output: 98******10
     */
    public static function maskCustom(
        string $value,
        int $visibleStart = 2,
        int $visibleEnd = 2,
        string $maskChar = '*'
    ): string {

        $length = strlen($value);

        if (($visibleStart + $visibleEnd) >= $length) {
            return $value;
        }

        return substr($value, 0, $visibleStart)
            . str_repeat($maskChar, $length - ($visibleStart + $visibleEnd))
            . substr($value, -$visibleEnd);
    }
}