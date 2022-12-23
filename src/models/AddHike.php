<?php

class Add extends Database
{
    public function addHike( $hikeName,  $hikeDate, $duration,  $distance,  $elevation, $hikeDescription, $update): void
    {
        if (!$this->query(
            "INSERT INTO hikes(hikeName,hikeDate,distance,duration,elevation_gain, hikeDescription, hikeUpdate) VALUES (?, ?, ?,?,?,?,?)",
            [
                $hikeName,
                $hikeDate,
                $duration,
                $distance,
                $elevation,
                $hikeDescription,
                $update
            ]
        )) {
            throw new Exception('Error during adding.');
        }
    }}