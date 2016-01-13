<?php
namespace TimeScheduler\Interfaces;

/**
 * Class TimeScheduleInterface
 * Interface for classes who can calculate timeslots
 *
 * @package TimeScheduler\Interfaces
 */
interface TimeScheduleInterface {

    /**
     * Set configuration data of time slots
     *
     * @param $slots
     * @return mixed
     */
    public function setScheduleTimeSlots(array $slots);

    /**
     * Set last timeslot to start with
     * Otherwise should start from now()
     *
     * @param $unixtimestamp
     * @return mixed
     */
    public function setLastTimeslot($unixtimestamp);


    /**
     * Return next timeslot for publication in unixtimestamp
     *
     * @return int
     */
    public function getNextTimeSlot();
}