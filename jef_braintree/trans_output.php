<?php
[
    "id" => "7qqn4c4h",
    "status" => "settling",
    "type" => "sale",
    "currencyIsoCode" => "USD",
    "amount" => 10.00,
    "merchantAccountId" => "learningfuze",
    "subMerchantAccountId" => null,
    "masterMerchantAccountId" => null,
    "orderId" => null,
    "createdAt" => [
        "date" => "2016 - 11 - 29 02:21:30.000000",
        "timezone_type" => 3,
        "timezone" => "UTC",
    ],

    "updatedAt" => [
        "date" => "2016 - 11 - 29 02:21:31.000000",
        "timezone_type" => 3,
        "timezone" => "UTC",
    ],

    "customer" => [
        "id" => null,
        "firstName" => null,
        "lastName" => null,
        "company" => null,
        "email" => null,
        "website" => null,
        "phone" => null,
        "fax" => null
    ],

    "billing" => [
        "id" => null,
        "firstName" => null,
        "lastName" => null,
        "company" => null,
        "streetAddress" => null,
        "extendedAddress" => null,
        "locality" => null,
        "region" => null,
        "postalCode" => null,
        "countryName" => null,
        "countryCodeAlpha2" => null,
        "countryCodeAlpha3" => null,
        "countryCodeNumeric" => null
    ],

    "refundId" => null,
    "refundIds" => [],

    "refundedTransactionId" => null,
    "partialSettlementTransactionIds" => [],

    "authorizedTransactionId" => null,
    "settlementBatchId" => null,
    "shipping" => [
        "id" => null,
        "firstName" => null,
        "lastName" => null,
        "company" => null,
        "streetAddress" => null,
        "extendedAddress" => null,
        "locality" => null,
        "region" => null,
        "postalCode" => null,
        "countryName" => null,
        "countryCodeAlpha2" => null,
        "countryCodeAlpha3" => null,
        "countryCodeNumeric" => null
    ],

    "customFields" => null,
    "avsErrorResponseCode" => null,
    "avsPostalCodeResponseCode" => "I",
    "avsStreetAddressResponseCode" => "I",
    "cvvResponseCode" => "I",
    "gatewayRejectionReason" => null,
    "processorAuthorizationCode" => null,
    "processorResponseCode" => "1000",
    "processorResponseText" => "Approved",
    "additionalProcessorResponse" => null,
    "voiceReferralNumber" => null,
    "purchaseOrderNumber" => null,
    "taxAmount" => null,
    "taxExempt" => null,
    "creditCard" => [
        "token" => null,
        "bin" => null,
        "last4" => null,
        "cardType" => null,
        "expirationMonth" => null,
        "expirationYear" => null,
        "customerLocation" => null,
        "cardholderName" => null,
        "imageUrl" => "https://assets.braintreegateway.com/payment_method_logo/unknown.png?environment=sandbox",
        "prepaid" => "Unknown",
        "healthcare" => "Unknown",
        "debit" => "Unknown",
        "durbinRegulated" => "Unknown",
        "commercial" => "Unknown",
        "payroll" => "Unknown",
        "issuingBank" => "Unknown",
        "countryOfIssuance" => "Unknown",
        "productId" => "Unknown",
        "uniqueNumberIdentifier" => null,
        "venmoSdk" => null,
    ],

    "statusHistory" => [
        "0" => [
            "_attributes:protected" => [
                "timestamp" => "DateTime Object",
                [
                    "date" => "2016 - 11 - 29 02:21:30.000000",
                    "timezone_type" => 3,
                    "timezone" => "UTC",
                ],

                "status" => "authorized",
                "amount" => 10.00,
                "user" => "fishe545@gmail.com",
                "transactionSource" => "api",
            ],

        ],

        "1" => [
            "_attributes:protected" => [
                "timestamp" => "DateTime Object",
                [
                    "date" => "2016 - 11 - 29 02:21:30.000000",
                    "timezone_type" => 3,
                    "timezone" => "UTC",
                ],

                "status" => "submitted_for_settlement",
                "amount" => 10.00,
                "user" => "fishe545@gmail.com",
                "transactionSource" => "api",
            ],

        ],

        "2" => [
            "_attributes:protected" => [
                "timestamp" => "DateTime Object",
                [
                    "date" => "2016 - 11 - 29 02:21:31.000000",
                    "timezone_type" => "3",
                    "timezone" => "UTC",
                ],

                "status" => "settling",
                "amount" => 10.00,
                "user" => "fishe545@gmail.com",
                "transactionSource" => "api",
            ]

        ]

    ],

    "planId" => null,
    "subscriptionId" => null,
    "subscription" => [
        "billingPeriodEndDate" => null,
        "billingPeriodStartDate" => null
    ],

    "addOns" => [],

    "discounts" => [],

    "descriptor" => [
        "_attributes:protected" => [
            "name" => null,
            "phone" => null,
            "url" => null
        ]
    ],

    "recurring" => null,
    "channel" => null,
    "serviceFeeAmount" => null,
    "escrowStatus" => null,
    "disbursementDetails" => [
        "_attributes:protected" => [
            "disbursementDate" => null,
            "settlementAmount" => null,
            "settlementCurrencyIsoCode" => null,
            "settlementCurrencyExchangeRate" => null,
            "fundsHeld" => null,
            "success" => null,
        ]

    ],

    "disputes" => [],

    "paymentInstrumentType" => "paypal_account",
    "processorSettlementResponseCode" => "4000",
    "processorSettlementResponseText" => "Confirmed",
    "threeDSecureInfo" => null,
    "paypal" => [
        "token" => null,
        "payerEmail" => "payer@example.com",
        "paymentId" => "PAY - 901ab2da20bd7532808ab6d9",
        "authorizationId" => null,
        "imageUrl" => "https://assets.braintreegateway.com/payment_method_logo/paypal.png?environment=sandbox",
        "debugId" => null,
        "payeeEmail" => null,
        "customField" => null,
        "payerId" => "PAYER_ID - 81993efdc98a7b96",
        "payerFirstName" => "John",
        "payerLastName" => "Doe",
        "payerStatus" => "VERIFIED",
        "sellerProtectionStatus" => null,
        "captureId" => "CAPTURE_ID",
        "refundId" => null,
        "transactionFeeAmount" => 0.01,
        "transactionFeeCurrencyIsoCode" => "USD",
        "description" => null,
    ],

    "creditCardDetails" => [
        "_attributes:protected" => [
            "token" => null,
            "bin" => null,
            "last4" => null,
            "cardType" => null,
            "expirationMonth" => null,
            "expirationYear" => null,
            "customerLocation" => null,
            "cardholderName" => null,
            "imageUrl" => "https://assets.braintreegateway.com/payment_method_logo/unknown.png?environment=sandbox",
            "prepaid" => "Unknown",
            "healthcare" => "Unknown",
            "debit" => "Unknown",
            "durbinRegulated" => "Unknown",
            "commercial" => "Unknown",
            "payroll" => "Unknown",
            "issuingBank" => "Unknown",
            "countryOfIssuance" => "Unknown",
            "productId" => "Unknown",
            "uniqueNumberIdentifier" => null,
            "venmoSdk" => null,
            "expirationDate" => null,
            "maskedNumber" => "******"
        ]

    ],

    "paypalDetails" => [
        "_attributes:protected" => [
            "token" => null,
            "payerEmail" => "payer@example.com",
            "paymentId" => "PAY - 901ab2da20bd7532808ab6d9",
            "authorizationId" => null,
            "imageUrl" => "https://assets.braintreegateway.com/payment_method_logo/paypal.png?environment=sandbox",
            "debugId" => null,
            "payeeEmail" => null,
            "customField" => null,
            "payerId" => "PAYER_ID - 81993efdc98a7b96",
            "payerFirstName" => "John",
            "payerLastName" => "Doe",
            "payerStatus" => "VERIFIED",
            "sellerProtectionStatus" => null,
            "captureId" => "CAPTURE_ID",
            "refundId" => null,
            "transactionFeeAmount" => 0.01,
            "transactionFeeCurrencyIsoCode" => "USD",
            "description" => null,
        ]

    ],

    "customerDetails" => [
        "_attributes:protected" => [
            "id" => null,
            "firstName" => null,
            "lastName" => null,
            "company" => null,
            "email" => null,
            "website" => null,
            "phone" => null,
            "fax" => null,
        ]

    ],

    "billingDetails" => [
        "_attributes:protected" => [
            "id" => null,
            "firstName" => null,
            "lastName" => null,
            "company" => null,
            "streetAddress" => null,
            "extendedAddress" => null,
            "locality" => null,
            "region" => null,
            "postalCode" => null,
            "countryName" => null,
            "countryCodeAlpha2" => null,
            "countryCodeAlpha3" => null,
            "countryCodeNumeric" => null,
        ]

    ],

    "shippingDetails" => [
        "_attributes:protected" => [
            "id" => null,
            "firstName" => null,
            "lastName" => null,
            "company" => null,
            "streetAddress" => null,
            "extendedAddress" => null,
            "locality" => null,
            "region" => null,
            "postalCode" => null,
            "countryName" => null,
            "countryCodeAlpha2" => null,
            "countryCodeAlpha3" => null,
            "countryCodeNumeric" => null,
        ]

    ],

    "subscriptionDetails" => [
        "_attributes:protected" => [
            "billingPeriodEndDate" => null,
            "billingPeriodStartDate" => null,
        ]

    ]

]
?>