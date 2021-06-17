<?php


namespace App\Entity;

/**
 * Class Card
 * @package App\Entity
 */

class Card
{

    const CARD_ITEMS = [
        [
            'name' => 'users',
            'count' => null,
            'title' => 'Количество зарегистрированных пользователей',
            'class' => 'ion ion-person-add',
            'bg' => 'bg-warning',
        ],
        [
            'name' => 'news',
            'count' => null,
            'title' => 'Количество новостей',
            'class' => 'ion ion-stats-bars',
            'bg' => 'bg-success'
        ],
        [
            'name' => 'categories',
            'count' => null,
            'title' => 'Количество категорий',
            'class' => 'ion ion-stats-bars',
            'bg' => 'bg-danger'
        ],
    ];
}
