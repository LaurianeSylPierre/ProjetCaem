@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image"> <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image"> </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p> <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a> </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">

            <li class="header">{{ trans('backpack::base.administration') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>Médiathèque</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/extract') }}"><i class="fa fa-files-o"></i> <span>Extraction</span></a></li>

            <li class="header">{{ trans('INDIVIDUS') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/person') }}"><i class="fa fa-id-card"></i> <span>Personne</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/type_person') }}"><i class="fa fa-tag"></i> <span>Type de personne</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/membership') }}"><i class="fa fa-user-plus"></i> <span>Adhésion</span></a></li>

            <li class="header">{{ trans('ACTIVITÉS') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/activity') }}"><i class="fa fa-star"></i> <span>Activités</span></a></li>      
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/instrument') }}"><i class="fa fa-music"></i> <span>Instrument</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/types_activity') }}"><i class="fa fa-tag"></i> <span>Type d'activités</span></a></li>

            <li class="header">{{ trans('LOCALISATIONS') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/city') }}"><i class="fa fa-industry"></i> <span>Ville</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/district') }}"><i class="fa fa-building"></i> <span>Quartier</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/location') }}"><i class="fa fa-map"></i> <span>Lieu</span></a></li>

            <li class="header">{{ trans('PAIEMENTS') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/payment') }}"><i class="fa fa-money"></i> <span>Paiement</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/bills') }}"><i class="fa fa-money"></i> <span>Facture</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/type_payment') }}"><i class="fa fa-credit-card"></i> <span>Type de paiement</span></a></li>

            <li class="header">{{ trans('SITE INTERNET') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/activity_web') }}"><i class="fa fa-star"></i> <span>Activités</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/article') }}"><i class="fa fa-newspaper-o"></i> <span>Actualités</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/team') }}"><i class="fa fa-users"></i> <span>Équipe</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/alert') }}"><i class="fa fa-star"></i> <span>Alertes</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside> @endif
