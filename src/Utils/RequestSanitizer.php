<?php


namespace src\Utils;


class RequestSanitizer
{
    private array $attributes = [];

    private array $preferableAttributes = [
        'record_no', 'policy_no', 'first_name', 'city', 'phone', 'general_practitioner_code',
        'paid_amount', 'policy_date', 'medical_card_no', 'last_name', 'state', 'martial_status',
        'hospital_claim_days', 'net_amount'
    ];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function get()
    {

    }

    public function parse()
    {
        var_dump(array_map('str_getcsv', file($_FILES['file'])));
        die();
    }
}