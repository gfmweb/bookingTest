<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\Persistence\ValueObjects;

readonly class CreateUserVO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            $data['name'],
            $data['email'],
            $data['password']
        );
    }

    public function asArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}