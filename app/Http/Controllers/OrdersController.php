<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\OrderMail;
use App\Models\{
    Customer,
    ServiceType,
    ServiceOrder,
    ServiceOrderDetail,
    User
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    Mail
};

class OrdersController extends Controller
{
    public function orders() {
        $service_order_no = date('Ymd') . "-" . uniqid();
        $customers = Customer::all();
        $serviceTypes = ServiceType::with('discType')
            ->get();
        $users = User::all();

        return view('orders', [
            'service_order_no' => $service_order_no,
            'customers' => $customers,
            'serviceTypes' => $serviceTypes,
            'users' => $users,
        ]);
    }

    public function post(Request $request)
    {
        try {
            // dd($request->all());
            $serviceOrder = new ServiceOrder;
            $serviceOrder->customer_id = $request->get('customer_number');
            $serviceOrder->so_date_rcv = $request->get('received_date');
            $serviceOrder->so_date_pickup = $request->get('pickup_date');
            $serviceOrder->user_id = Auth::user()->id;
            $serviceOrder->save();

            $articles = $request->get('articles');
            $unitPrices = $request->get('unitPrices');
            $minimums = $request->get('minimums');
            $quantities = $request->get('quantities');
            $discounts = $request->get('discounts');
            $amounts = $request->get('amounts');

            for ($index = 0; $index < count($articles); $index++) {
                $serviceOrderDetail = new ServiceOrderDetail;
                $serviceOrderDetail->so_id = $serviceOrder->id;
                
                $serviceType = ServiceType::where('article_name', $articles[$index])
                    ->first();

                $serviceOrderDetail->so_tos_id = $serviceType->id;
                $serviceOrderDetail->so_qty = $minimums[$index];
                $serviceOrderDetail->so_actualqty = $quantities[$index];
                $serviceOrderDetail->so_price = $unitPrices[$index];
                $discount = $discounts[$index];
                $discount = str_replace('%', '', $discount);
                $serviceOrderDetail->disc_pct = $discount / 100;
                $serviceOrderDetail->save();
            }

            $customer = Customer::find($request->get('customer_number'));
            if (!empty($customer->email)) {
                Mail::to($customer->email)
                    ->send(new OrderMail($request->all()));
            }
        } catch (Exception $e) {
            return redirect('/orders?save=0');
        }

        return redirect('/orders?save=1');
    }
}
