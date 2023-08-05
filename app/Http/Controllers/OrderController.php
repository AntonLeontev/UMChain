<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderMakePaidRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(OrderCreateRequest $request)
	{
		$order = Order::create([
			'user_id' => auth()->id(),
			'usdt' => $request->safe()->usdt,
			'umt' => $request->safe()->umt,
			'wallet' => settings()->wallet,
			'freeze_to' => settings()->default_freeze,
		]);

		return response()->json($order);
	}

	public function makePaid(OrderMakePaidRequest $request, Order $order)
	{
		$order->updateOrFail(['is_paid' => true]);

		if(auth()->user()->email !== $request->email) {
			auth()->user()->update(['email' => $request->email]);
		}
	}
}
