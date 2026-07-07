<?php

namespace ITCrackers\Helper;

class Validation
{
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePhone(string $phone): bool
    {
        return preg_match('/^[6-9]\d{9}$/', $phone) === 1;
    }

    public static function validateAadhaar(string $aadhaar): bool
    {
        return preg_match('/^\d{12}$/', $aadhaar) === 1;
    }

    public static function validatePan(string $pan): bool
    {
        return preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/i', $pan) === 1;
    }

    public static function validateIfsc(string $ifsc): bool
    {
        return preg_match('/^[A-Z]{4}0[A-Z0-9]{6}$/i', $ifsc) === 1;
    }

    public static function validateGstin(string $gstin): bool
    {
        return preg_match('/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/i', $gstin) === 1;
    }

    public static function validatePassport(string $passport): bool
    {
        return preg_match('/^[A-Z][0-9]{7}$/i', $passport) === 1;
    }

    public static function validatePincode(string $pincode): bool
    {
        return preg_match('/^[1-9][0-9]{5}$/', $pincode) === 1;
    }

    public static function validateUrl(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    public static function validateIp(string $ip): bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP) !== false;
    }

    public static function validateIpv4(string $ip): bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
    }

    public static function validateIpv6(string $ip): bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false;
    }

    public static function validateUuid(string $uuid): bool
    {
        return preg_match(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[1-8][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $uuid
        ) === 1;
    }

    public static function validateMacAddress(string $mac): bool
    {
        return filter_var($mac, FILTER_VALIDATE_MAC) !== false;
    }

    public static function validatePassword(
        string $password,
        int $minLength = 8,
        bool $uppercase = true,
        bool $lowercase = true,
        bool $number = true,
        bool $special = true
    ): bool {

        if (strlen($password) < $minLength) {
            return false;
        }

        if ($uppercase && !preg_match('/[A-Z]/', $password)) {
            return false;
        }

        if ($lowercase && !preg_match('/[a-z]/', $password)) {
            return false;
        }

        if ($number && !preg_match('/\d/', $password)) {
            return false;
        }

        if ($special && !preg_match('/[\W_]/', $password)) {
            return false;
        }

        return true;
    }

    public static function validateCreditCard(string $number): bool
    {
        $number = preg_replace('/\D/', '', $number);

        return preg_match('/^\d{13,19}$/', $number) === 1;
        // TODO: Add Luhn algorithm validation
    }

    public static function validateUpi(string $upi): bool
    {
        return preg_match('/^[a-zA-Z0-9.\-_]{2,256}@[a-zA-Z]{2,64}$/', $upi) === 1;
    }

    public static function validateVehicleNumber(string $vehicle): bool
    {
        return preg_match('/^[A-Z]{2}[ -]?[0-9]{1,2}[ -]?[A-Z]{1,3}[ -]?[0-9]{4}$/i', $vehicle) === 1;
    }
}