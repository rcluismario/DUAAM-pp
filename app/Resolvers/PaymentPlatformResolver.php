<?php

namespace App\Resolvers;

use App\PaymentPlatform;
use Exception;

class PaymentPlatformResolver
{

    protected $paymentPlatforms;

    public function __construct()
    {
        $this->paymentPlatforms = collect([['name' => 'paypal'], ['name' => 'stripe']]);
    }

    public function resolveService($paymentPlatformId)
    {
        $name = strtolower($this->paymentPlatforms->firstWhere('name', $paymentPlatformId)['name']);

        $service = config("services.{$name}.class");

        if ($service) {
            return resolve($service);
        }

        throw new Exception('The selected payment platform has no being implemented');
    }
}
