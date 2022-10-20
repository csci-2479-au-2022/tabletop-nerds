<?php

namespace App\Models;

class Game
{
    public function __construct(
        public int $id,
        public string $title,
        public int $rating,
        public string $age,
    ){

    }

    public function toString(): string
    {
        return "$this->title, Rating: $this->rating, Recommended age: $this->age";
    }

}
