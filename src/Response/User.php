<?php

namespace App\Response;

class User
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
    ) {}
}