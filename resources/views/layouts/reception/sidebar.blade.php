<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            @php

            // if(Auth::user()->hasRole('admin')){
            //     $dashboardUrl = "backend.auth.dashboard";
            // }elseif(Auth::user()->hasRole('engineer')){
            //     $dashboardUrl = "backend.auth.engineerDashboard";
            // }else{
                $dashboardUrl = "engineer.auth.receptionDashboard";
            // }
            @endphp
            <li class="menu">
                <a href="{{ route($dashboardUrl) }}"
                    {{ strpos(Route::currentRouteName(), $dashboardUrl) === 0 ? 'data-active=true' : '' }}
                    class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li> <li class="menu">
                <a href=""
                    {{-- {{ strpos(Route::currentRouteName(), 'backend.cms.proposal') === 0 ? 'data-active=true' : '' }} --}}
                    class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Bank Proposals</span>
                    </div>
                    {{-- <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div> --}}
                </a>
                {{-- <ul class="collapse submenu list-unstyled" id="proposal" data-parent="#accordionExample">
                    <li class="active">
                        <a href="{{ route('backend.cms.proposal.index') }}"> Index </a>
                    </li>

                </ul> --}}
            </li>
            <hr>


            {{-- <li class="menu">
                <a href="#client"
                    {{ strpos(Route::currentRouteName(), 'client') === 0 ? 'data-active=true' : '' }}
                    data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Manage Clients</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled {{ strpos(Route::currentRouteName(), 'client') === 0 ? 'show' : '' }}"
                    id="client" data-parent="#accordionExample">
                    <li
                        class=" {{ strpos(Route::currentRouteName(), 'client.index')  === 0 ? 'active' : '' }} ">
                        <a href="{{ route('client.index') }}">Client Lists</a>
                    </li>

                    <li
                        class=" {{ strpos(Route::currentRouteName(), 'client.create') === 0 ? 'active' : '' }} ">
                        <a href="{{ route('client.index') }}">Add New Client </a>
                    </li>

                </ul>
            </li>

            <li class="menu" style="border-top:solid 1px silver">
                <a href="{{ route('backend.cms.branch.index') }}"
                {{ strpos(Route::currentRouteName(), 'backend.cms.branch') === 0 ? 'data-active=true' : '' }}data-toggle="collapse"  class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Bank Branch</span>
                    </div>
                </a>
            </li> --}}
        </ul>
    </nav>
</div>
