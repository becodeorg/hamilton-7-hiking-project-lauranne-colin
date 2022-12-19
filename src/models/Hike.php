<?php

class Hike extends Database
{
    public function findAll(): array|false
    {
        try {
           return $this->query(
                'SELECT hikeID, hikeName, hikeDescription FROM hikes LIMIT 5'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $codeTwo): array|false
    {
        try {
            return $this->query(
                "SELECT hikeID, hikeName, hikeDescription FROM hikes WHERE hikeID = ?",
                [
                    $codeTwo
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}