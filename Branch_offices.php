<?php

class Branch_offices
{
    private int $id;
    private string $name;
    private string $address;
    private string $city;
    private string $description;

    public function getDisplayedName(): string
    {
        return $this->name;
    }
}


