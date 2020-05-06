<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Session;

class AppServiceProvider extends ServiceProvider
{
    protected $cntsh = [
        //1cntsh
        ['route' => 'president', 'name' => 'Diagramme'],
        ['route' => 'president', 'name' => 'Missions'],
        ['route' => 'president', 'name' => 'Mot du directeur'],
        ['route' => 'president', 'name' => 'Réseau national'],
        ['route' => 'president', 'name' => 'Gouvernance'],
        ['route' => 'president', 'name' => 'Histoire'],
        ['route' => 'president', 'name' => 'Bilan activité'],
        //2sang
        ['route' => 'president', 'name' => 'Produit sanguins'],
        ['route' => 'president', 'name' => 'Le sang, c\'est quoi'],
        ['route' => 'president', 'name' => 'Hemouigilance'],
        ['route' => 'president', 'name' => 'Cout de prestation'],
        ['route' => 'president', 'name' => 'Situation nationale de don de sang'],
        ['route' => 'president', 'name' => 'Audit'],
        //3don du sang
        ['route' => 'president', 'name' => 'Planification'],
        ['route' => 'president', 'name' => 'Pouquoi donner du sang?'],
        ['route' => 'president', 'name' => 'Qui peut deonner du sang?'],
        ['route' => 'president', 'name' => 'Informations post-don'],
        ['route' => 'president', 'name' => 'Faire une promesse de don'],
        ['route' => 'president', 'name' => 'Ou donner son sang'],
        ['route' => 'president', 'name' => 'FAQ'],
         //4Partenaires
         ['route' => 'president', 'name' => 'Association donneurs'],
         ['route' => 'president', 'name' => 'Partenaires institutionnels'],
         ['route' => 'president', 'name' => 'Transfusion mondiale'],
         ['route' => 'president', 'name' => 'Press'],
         ['route' => 'president', 'name' => 'Ou donner son sang']

    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(Uow::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // URL::forceScheme('https');
        Session::put('cntsh', $this->cntsh);
    }
}
