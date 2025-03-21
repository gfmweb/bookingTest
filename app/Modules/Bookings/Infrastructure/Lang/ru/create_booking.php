<?php

return [
    'attributes' => [
        'user_id' => 'ID пользователя',
        'resource_id' => 'ID ресурса',
        'start_time' => 'время начала',
        'end_time' => 'время окончания',
    ],

    'validation' => [
        'user_id' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'integer' => 'Поле :attribute должно быть целым числом',
            'exists' => 'Выбранный :attribute недействителен',
        ],
        'resource_id' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'integer' => 'Поле :attribute должно быть целым числом',
            'exists' => 'Выбранный :attribute недействителен',
        ],
        'start_time' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'date' => 'Поле :attribute должно быть действительной датой',
            'after_or_equal' => 'Поле :attribute должно быть датой после или равной текущей дате',
        ],
        'end_time' => [
            'required' => 'Поле :attribute обязательно для заполнения',
            'date' => 'Поле :attribute должно быть действительной датой',
            'after' => 'Поле :attribute должно быть датой после :date',
        ],
    ],

    'messages' => [
        'success' => 'Бронирование успешно создано',
        'error' => 'Ошибка при создании бронирования',
    ],
];