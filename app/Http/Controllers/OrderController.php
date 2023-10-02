<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderMakePaidRequest;
use App\Models\Order;
use App\Services\Telegram\TelegramService;

class OrderController extends Controller
{
    public function create(OrderCreateRequest $request)
    {
        $wallet = $request->get('network') === 'TRC20'
            ? settings()->tron_wallet
            : settings()->eth_wallet;

        $order = Order::create([
            'user_id' => auth()->id(),
            'usdt' => $request->safe()->usdt,
            'umt' => $request->safe()->umt,
            'wallet' => $wallet,
            'network' => $request->safe()->network,
            'freeze_to' => settings()->default_freeze,
        ]);

        return response()->json($order);
    }

    public function makePaid(OrderMakePaidRequest $request, Order $order)
    {
        $order->updateOrFail(['is_paid' => true, 'paid_at' => now()]);

        TelegramService::sendMessage("Оплачен заказ №$order->id.\n$order->usdt USDT\n$order->umt UMCT\nсеть: $order->network\nкошелек: $order->wallet");
    }
}
