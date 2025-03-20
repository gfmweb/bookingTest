<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\Persistence\ValueObjects;

readonly class UpdateUserVO
{
    public function __construct(
        public ?string $name,
        public ?string $email,
        public ?string $password
    ) {
    }

    public function asArray(): array
    {
        $updateInfo = [];
        if ($this->name !== null) {
            $updateInfo['name'] = $this->name;
        }
        if ($this->email!== null) {
            $updateInfo['email'] = $this->email;
        }
        if ($this->password!== null) {
            $updateInfo['password'] = $this->password;
        }
        return $updateInfo;
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            $data['name']?? null,
            $data['email']?? null,
            $data['password']?? null
        );
    }
}