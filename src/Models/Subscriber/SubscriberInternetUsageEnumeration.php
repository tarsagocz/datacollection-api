<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 14:26 30.10.2019
 */

namespace Smswizz\Models\Subscriber;

class SubscriberInternetUsageEnumeration
{
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const MONTHLY = 'monthly';
    const NEVER = 'never';

    const ENUM = [
        self::DAILY => [

        ],
        self::WEEKLY => [

        ],
        self::MONTHLY => [

        ],
        self::NEVER => [

        ]
    ];
}