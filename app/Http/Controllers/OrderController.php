<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cancelOrder($orderId)
{
    $order = Order::findOrFail($orderId);
    
    if ($order->status !== 'completed') {
        $order->status = 'canceled';
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'Order canceled successfully.');
    }
    
    return redirect()->route('admin.orders.index')->with('error', 'Cannot cancel a completed order.');
}

public function cancelOrder(Request $request, $orderId)
{
    $order = Order::findOrFail($orderId);
    
    if ($order->status === 'completed') {
        return redirect()->route('admin.orders.index')->with('error', 'Cannot cancel a completed order.');
    }

    $order->status = 'canceled';
    $order->save();

    // Send notification to user about order cancellation
    $user = $order->user;
    // Send notification code here

    return redirect()->route('admin.orders.index')->with('success', 'Order canceled successfully.');
}


}
