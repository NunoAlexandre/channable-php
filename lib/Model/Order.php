<?php

namespace Channable\Model;

class Order
{
    /**
     * @var Product[]
     */
    private $products;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Address
     */
    private $shipping;

    /**
     * @var Address
     */
    private $billing;

    /**
     * @var Extra
     */
    private $extra;

    /**
     * @var Price
     */
    private $price;

    public function __construct(
        array $products,
        Customer $customer,
        Address $shipping,
        Address $billing,
        Extra $extra,
        Price $price
    ) {
        $this->products = $products;
        $this->customer = $customer;
        $this->shipping = $shipping;
        $this->billing = $billing;
        $this->extra = $extra;
        $this->price = $price;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return Address
     */
    public function getShipping(): Address
    {
        return $this->shipping;
    }

    /**
     * @return Address
     */
    public function getBilling(): Address
    {
        return $this->billing;
    }

    /**
     * @return Extra
     */
    public function getExtra(): Extra
    {
        return $this->extra;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
}
