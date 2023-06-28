<?php

function setActiveClass($route)
{
    return $route == url()->current() ? true : false;
}

function setActiveClassMarket($currentRoute)
{
    $marketRouteArray = [
        route('admin.market.category.index'),
        route('admin.market.brand.index'),
        route('admin.market.comment.index'),
        route('admin.market.delivery.index'),
        route('admin.market.discount.copan.index'),
        route('admin.market.discount.common-discount.index'),
        route('admin.market.discount.amazing-sale.index'),
        route('admin.market.order.index'),
        route('admin.market.order.new'),
        route('admin.market.order.sending'),
        route('admin.market.order.unpaid'),
        route('admin.market.order.canceled'),
        route('admin.market.order.returned'),
    ];
    return in_array($currentRoute, $marketRouteArray) == true ? true : false;
}

function setActiveClassVitrin($currentRoute)
{
    $marketRouteArray = [
        route('admin.market.category.index'),
        route('admin.market.brand.index'),
        route('admin.market.comment.index'),
    ];
    return in_array($currentRoute, $marketRouteArray) == true ? true : false;
}

function setActiveClassDiscount($currentRoute)
{
    $marketRouteArray = [
        route('admin.market.discount.copan.index'),
        route('admin.market.discount.common-discount.index'),
        route('admin.market.discount.amazing-sale.index'),
    ];
    return in_array($currentRoute, $marketRouteArray) == true ? true : false;
}

function setActiveClassOrder($currentRoute)
{
    $marketRouteArray = [
        route('admin.market.order.index'),
        route('admin.market.order.new'),
        route('admin.market.order.sending'),
        route('admin.market.order.unpaid'),
        route('admin.market.order.canceled'),
        route('admin.market.order.returned'),
    ];
    return in_array($currentRoute, $marketRouteArray) == true ? true : false;
}

function persianNumber($number)
{
    $number = str_replace('0', '۰', $number);
    $number = str_replace('1', '۱', $number);
    $number = str_replace('2', '۲', $number);
    $number = str_replace('3', '۳', $number);
    $number = str_replace('4', '۴', $number);
    $number = str_replace('5', '۵', $number);
    $number = str_replace('6', '۶', $number);
    $number = str_replace('7', '۷', $number);
    $number = str_replace('8', '۸', $number);
    $number = str_replace('9', '۹', $number);

    return $number;
}

