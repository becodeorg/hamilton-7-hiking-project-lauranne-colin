<?php

class Tag extends Database
{
    public function displayTag(): array|false
    {
        try {
           return $this->query(
                'SELECT TagHikes.hikeID, TagHikes.tag_id, Tag.tagName FROM TagHikes INNER JOIN Tag ON TagHikes.tag_id=Tag.tag_id'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }


    public function findTag(string $codeTag): array|false
    {
        try {
            return $this->query(
                'SELECT TagHikes.hikeID, TagHikes.tag_id, Tag.tagName FROM TagHikes INNER JOIN Tag ON TagHikes.tag_id=Tag.tag_id WHERE tagName= ?',
                [
                    $codeTag
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}