<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\CardService;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Admin\Dashboard
 * @param CardService $card_service
 */


class DashboardController extends Controller
{

    /**
     * @var CardService $card_service
     */
    private $card_service;

    /**
     * @var NotificationService $notification_service
     */
    private $notification_service;

    /**
     * DashboardController constructor.
     * @param CardService $cardService
     * @param NotificationService $notificationService
     */
    public function __construct(CardService $cardService, NotificationService $notificationService)
    {
        $this->card_service = $cardService;
        $this->notification_service = $notificationService;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $user = Auth::user();
        $cards = $this->card_service->generateCards(['users', 'news' , 'categories']);
        $notifications = $this->notification_service->getNotifications($user);

        return view('admin.dashboard.index', ['cards' => $cards, 'notifications' => $notifications]);
    }
}
