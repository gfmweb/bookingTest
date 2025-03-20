<?php

declare(strict_types=1);

return [
    'attributes' => [
        'name' => 'имя',
        'email' => 'электронная почта',
        'password' => 'пароль',
        'password_confirmation' => 'подтверждение пароля',
    ],

    'validation' => [
        'name' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'string' => 'Поле :attribute должно быть строкой',
            'max' => 'Поле :attribute не должно превышать :max символов',
        ],
        'email' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'email' => 'Поле :attribute должно быть действительным email адресом',
            'unique' => 'Такой :attribute уже зарегистрирован',
        ],
        'password' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute должно содержать минимум :min символов',
            'confirmed' => 'Пароли не совпадают',
        ],
    ],

    'messages' => [
        'success' => 'Пользователь успешно создан',
        'error' => 'Ошибка при создании пользователя',
    ],
];