<?php

class Branch_offices
{
    private int $id;
    private string $name;
    private string $address;
    private string $city;
    private string $description;

    public function getDisplayedName(): string {return $this->name;}
    public function getDisplayedAddress(): string {return $this->address;}
    public function getDisplayedCity(): string {return $this->city;}
    public function getDisplayedDescription(): string {return $this->description;}
}


