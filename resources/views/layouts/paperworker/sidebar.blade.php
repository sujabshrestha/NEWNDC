<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{ route('paperworker.dashboard') }}"
                    {{ strpos(Route::currentRouteName(),'paperworker.dashboard') === 0 ? 'data-active=true' : '' }}
                    class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ route('paperworker.proposal.index') }}" {{-- {{ strpos(Route::currentRouteName(), 'backend.cms.proposal') === 0 ? 'data-active=true' : '' }} --}} class="dropdown-toggle">
                    <div class="">
                        <i data-feather="file"></i>
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

            <li class="menu">
                <a href="{{ route('paperworker.client.index') }}" {{-- {{ strpos(Route::currentRouteName(), 'backend.cms.proposal') === 0 ? 'data-active=true' : '' }} --}} class="dropdown-toggle">
                    <div class="">
                        <i data-feather="users"></i>
                        <span>Manage Clients</span>
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




            <li class="menu">
                <a href="{{ route('paperworker.valuation.index') }}" {{-- {{ strpos(Route::currentRouteName(), 'backend.cms.proposal') === 0 ? 'data-active=true' : '' }} --}} class="dropdown-toggle">
                    <div class="">
                        <i data-feather="briefcase"></i>
                        <span>Valuation</span>
                    </div>

                </a>

            </li>


           
        </ul>
    </nav>
</div>