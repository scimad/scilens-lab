@extends("admin.layout")

@section('sidebar')
	<ul class="nav">
        <li class="nav-item">
            <a class="" data-toggle="collapse" href="#collapseArtisan" aria-expanded="true">
                <i class="la la-users"></i>
                <p>Artisan</p>
                <span class="badge badge-count">50</span>
                <span class="caret"></span>
            </a>
            
            <div class="collapse in" id="collapseArtisan" aria-expanded="true" style="">
                <ul class="nav">
                    <li>
                        <a href="#recruit">
                            <span class="link-collapse">Recruit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#view">
                            <span class="link-collapse">View All</span>
                        </a>
                    </li>
                    <li>
                        <a href="#fire">
                            <span class="link-collapse">Fire</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>

@endsection





@section('content')
@endsection

