<?php

$json = '{
    "Result": {
        "ResultType":0,
        "ResultCode":0,
        "ResultDesc":"The service request has been accepted successfully.",
        "OriginatorConversationID":"14593-80515-2",
        "ConversationID":"AG_20170821_000049448b24712383de",
        "TransactionID":"LHL41AHJ6G",
        "ResultParameters": {
            "ResultParameter": [ {
                "Key": "TransactionAmount", "Value": 100
            }
            ,
            {
                "Key": "TransactionReceipt", "Value": "LHL41AHJ6G"
            }
            ,
            {
                "Key": "B2CRecipientIsRegisteredCustomer", "Value": "Y"
            }
            ,
            {
                "Key": "B2CChargesPaidAccountAvailableFunds", "Value": 0.00
            }
            ,
            {
                "Key": "ReceiverPartyPublicName", "Value": "254708374149 - John Doe"
            }
            ,
            {
                "Key": "TransactionCompletedDateTime", "Value": "21.08.2017 12:01:59"
            }
            ,
            {
                "Key": "B2CUtilityAccountAvailableFunds", "Value": 98834.00
            }
            ,
            {
                "Key": "B2CWorkingAccountAvailableFunds", "Value": 100000.00
            }
            ]
        }
        ,
        "ReferenceData": {
            "ReferenceItem": {
                "Key": "QueueTimeoutURL", "Value": "https:\/\/internalsandbox.safaricom.co.ke\/mpesa\/b2cresults\/v1\/submit"
            }
        }
    }
}';

echo "<pre>";
print_r(json_decode($json));