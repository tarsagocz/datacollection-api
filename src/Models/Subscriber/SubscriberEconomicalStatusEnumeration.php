<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 14:25 30.10.2019
 */

namespace DataCollection\Models\Subscriber;

class SubscriberEconomicalStatusEnumeration
{
    const EMPLOYEE = 'employee';
    const RETIRED = 'retired';
    const ENTREPRENEUR = 'entrepreneur';
    const UNEMPLOYED = 'unemployed';

    const ENUM = [
        self::EMPLOYEE => [

        ],
        self::RETIRED => [

        ],
        self::ENTREPRENEUR => [

        ],
        self::UNEMPLOYED => [

        ]
    ];
}