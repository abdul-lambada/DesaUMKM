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
                ->descriptionIcon('heroicon-o-users')
                ->color('primary'),
            
            Card::make('Total UMKM', Umkm::count())
                ->description('Registered businesses')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('success'),
            
            Card::make('Total Products', Product::count())
                ->description('Available products')
                ->descriptionIcon('heroicon-o-cube')
                ->color('info'),
            
            Card::make('Total Orders', Order::count())
                ->description('Product orders')
                ->descriptionIcon('heroicon-o-shopping-cart')
                ->color('warning'),
            
            Card::make('Tourism Places', Wisata::count())
                ->description('Tourism destinations')
                ->descriptionIcon('heroicon-o-map')
                ->color('success'),
            
            Card::make('Total Bookings', Booking::count())
                ->description('Homestay bookings')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('info'),
            
            Card::make('Events', Event::count())
                ->description('Community events')
                ->descriptionIcon('heroicon-o-clipboard-list')
                ->color('warning'),
            
            Card::make('Online Letters', SuratOnline::count())
                ->description('Online letter requests')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),
            
            Card::make('Feedbacks', Feedback::count())
                ->description('User feedbacks')
                ->descriptionIcon('heroicon-o-chat-alt-2')
                ->color('success'),
        ];
    }
} 