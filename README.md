# TimeScheduler
[![Travis](https://travis-ci.org/lezhnev74/TimeScheduler.svg?branch=master)]()
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lezhnev74/TimeScheduler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lezhnev74/TimeScheduler/?branch=master)
[![Packagist](https://img.shields.io/packagist/l/lezhnev/time-scheduler.svg)]()

Class allows you to set weekdays and time stamps and pick next available for scheduling purposes.


## Installation
Just run composer:

```
composer require lezhnev/time-scheduler
```

## Example

```php
use TimeScheduler\Classes\TimeScheduler;

$scheduler = new TimeScheduler();

//if required set the last slot, so next one will be calculated from this time point
$now = strtotime("next Monday 12:00");
$scheduler->setLastTimeslot($now); 

// set Time table
$scheduler->setScheduleTimeSlots(
    [
        "Mon" => ["12:30", "12:40"],
        "Tue" => [],
        "Wed" => [],
        "Thu" => ["21:30"],
        "Fri" => [],
        "Sat" => [],
        "Sun" => [],
    ]
);

// iteratively call getNextTimeSlot() to get next slot from time table
$time1 = $scheduler->getNextTimeSlot(); 
$time2 = $scheduler->getNextTimeSlot();

date("H:i",$time1); // will be "12:30"
date("H:i",$time2); // will be "12:40"


```


## Support

Please feel free to add PR or email me at lezhnev.work@gmail.com
