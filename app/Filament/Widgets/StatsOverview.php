<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Umkm;
use App\Models\Product;
use App\Models\Order;
use App\Models\Wisata;
use App\Models\Booking;
use App\Models\Event;
use App\Models\SuratOnline;
use App\Models\Feedback;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-s-users')
                ->color('primary'),
            
            Card::make('Total UMKM', Umkm::count())
                ->description('Registered businesses')
                ->descriptionIcon('heroicon-s-building-storefront')
                ->color('success'),
            
            Card::make('Total Products', Product::count())
                ->description('Available products')
                ->descriptionIcon('heroicon-s-shopping-bag')
                ->color('info'),
            
            Card::make('Total Orders', Order::count())
                ->description('Product orders')
                ->descriptionIcon('heroicon-s-shopping-cart')
                ->color('warning'),
            
            Card::make('Tourism Places', Wisata::count())
                ->description('Tourism destinations')
                ->descriptionIcon('heroicon-s-map-pin')
                ->color('success'),
            
            Card::make('Total Bookings', Booking::count())
                ->description('Homestay bookings')
                ->descriptionIcon('heroicon-s-calendar')
                ->color('info'),
            
            Card::make('Events', Event::count())
                ->description('Community events')
                ->descriptionIcon('heroicon-s-calendar-days')
                ->color('warning'),
            
            Card::make('Online Letters', SuratOnline::count())
                ->description('Online letter requests')
                ->descriptionIcon('heroicon-s-document-text')
                ->color('primary'),
            
            Card::make('Feedbacks', Feedback::count())
                ->description('User feedbacks')
                ->descriptionIcon('heroicon-s-chat-bubble-left-right')
                ->color('success'),
        ];
    }
} 