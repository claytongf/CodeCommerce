<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use CodeCommerce\OrderStatus;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminOrdersController extends Controller
{

    /**
     * @var OrderStatus
     */
    private $orderStatus;
    /**
     * @var Order
     */
    private $order;

    public function __construct(Order $order, OrderStatus $orderStatus)
    {
        $this->orderStatus = $orderStatus;
        $this->order = $order;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->order->paginate(10);
        $status = OrderStatus::lists('name', 'id');
        return view('admin.orders.index', compact('orders', 'status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->order->find($id)->update($input);
        return redirect()->route('admin.orders');
    }
}
