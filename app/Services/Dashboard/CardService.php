<?php


namespace App\Services\Dashboard;


use App\Entity\Card;
use App\Services\CounterService;
use Illuminate\Support\Collection;

/**
 * Class CardService
 * @package App\Services\Dashboard
 * @param CounterService $counterService

 */

class CardService
{
    const COUNT = 'Count';

    private $counterService;

    /**
     * CardService constructor.
     * @param CounterService $service
     */
    public function __construct(CounterService $service){
        $this->counterService = $service;
    }

    /**
     * @param $need_generate
     * @return \Illuminate\Support\Collection
     */
    public function generateCards($need_generate): Collection
    {
        $cards = collect(Card::CARD_ITEMS);
        $neededly = $cards->whereIn('name', $need_generate)->map(function($card){
            $method = $card['name'] . self::COUNT;
            $count = method_exists($this->counterService, $method) ? $this->counterService->$method() : 0;
            $card['count'] = $count;
            return $card;
        });
        return $neededly;
    }
}
