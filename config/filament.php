<?php

return [
    'path' => env('FILAMENT_PATH', 'admin'),

    'domain' => env('FILAMENT_DOMAIN'),

    'home_url' => '/',

    'auth' => [
        'guard' => env('FILAMENT_AUTH_GUARD', 'web'),
    ],

    'middleware' => [
        'base' => [
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'auth' => [
            \Filament\Http\Middleware\Authenticate::class,
        ],
    ],

    'pages' => [
        'namespace' => 'App\\Filament\\Pages',
        'path' => app_path('Filament/Pages'),
        'register' => [
            \Filament\Pages\Dashboard::class,
        ],
    ],

    'resources' => [
        'namespace' => 'App\\Filament\\Resources',
        'path' => app_path('Filament/Resources'),
        'register' => [],
    ],

    'widgets' => [
        'namespace' => 'App\\Filament\\Widgets',
        'path' => app_path('Filament/Widgets'),
        'register' => [
            \Filament\Widgets\AccountWidget::class,
            \Filament\Widgets\FilamentInfoWidget::class,
            \App\Filament\Widgets\StatsOverview::class,
        ],
    ],

    'livewire' => [
        'namespace' => 'App\\Filament',
        'path' => app_path('Filament'),
    ],

    'layout' => [
        'sidebar' => [
            'is_collapsible_on_desktop' => true,
            'groups' => [
                'are_collapsible' => true,
            ],
            'width' => null,
            'collapsed_width' => null,
        ],
        'max_content_width' => null,
        'tables' => [
            'actions' => [
                'type' => \Filament\Tables\Actions\Action::class,
            ],
        ],
        'forms' => [
            'actions' => [
                'type' => \Filament\Forms\Actions\Action::class,
            ],
            'have_inline_labels' => false,
        ],
    ],

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    'broadcasting' => [
        'echo' => [
            'broadcaster' => env('FILAMENT_BROADCASTER', 'pusher'),
            'key' => env('FILAMENT_ECHO_KEY'),
            'cluster' => env('FILAMENT_ECHO_CLUSTER'),
            'force_tls' => env('FILAMENT_ECHO_FORCE_TLS', false),
        ],
    ],

    'cache' => [
        'prefix' => env('FILAMENT_CACHE_PREFIX', 'filament'),
    ],

    'default_theme' => 'light',

    'dark_mode' => [
        'enabled' => true,
        ],

    'database' => [
        'connection' => env('FILAMENT_DATABASE_CONNECTION'),
    ],

    'notifications' => [
        'vertical_alignment' => 'top',
        'horizontal_alignment' => 'right',
    ],

    'support' => [
        'email' => env('FILAMENT_SUPPORT_EMAIL'),
        ],
];
