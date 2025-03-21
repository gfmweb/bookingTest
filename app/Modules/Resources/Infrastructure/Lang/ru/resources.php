<?php

return [
    'attributes' => [
        'name' => 'название',
        'type' => 'тип',
        'description' => 'описание',
    ],

    'validation' => [
        'name' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'string' => 'Поле :attribute должно быть строкой',
            'max' => 'Поле :attribute не должно превышать :max символов',
        ],
        'type' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'string' => 'Поле :attribute должно быть строкой',
            'max' => 'Поле :attribute не должно превышать :max символов',
            'exists' => 'Выбранный :attribute недействителен',
        ],
        'description' => [
            'string' => 'Поле :attribute должно быть строкой',
        ],
    ],

    'messages' => [
        'success' => 'Ресурс успешно создан',
        'error' => 'Ошибка при создании ресурса',
    ],
];