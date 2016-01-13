# TimeScheduler

Class allows you to set weekdays and time stamps and pick next available for scheduling purposes.


## Installation
Just run composer:

```
composer require lezhnev/instagram2vk
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

Please feel free to add PR or email me at meekman74@gmail.com
