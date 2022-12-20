<?php

class Hike extends Database
{
    public function findAll(): array|false
    {
        try {
           return $this->query(
                'SELECT hikeID, hikeName, hikeDescription, hikeDate, hikeUpdate, distance, duration, elevation_gain FROM hikes LIMIT 25'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT hikeID, hikeName, hikeDescription, hikeDate, hikeUpdate, distance, duration, elevation_gain FROM hikes WHERE hikeID = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}