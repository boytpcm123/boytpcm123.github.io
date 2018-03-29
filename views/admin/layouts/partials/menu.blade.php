<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info" style="height: 100px;">
            <div class="info-container">
                <div class="image pull-left">
                    <img src="/assets/admin/images/user.png" width="48" height="48" alt="User"/>
                </div>
                <div class="name" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i
                                        class="material-icons">person</i>{!! trans("admin_menu.profile") !!}</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>{!! trans("admin_menu.sign_out") !!}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header"></li>
                <li class="{!! currentPageMenu(["*admin"]) !!}">
                    <a href="/admin">
                        <i class="material-icons">dashboard</i>
                        <span>{!! trans("admin_menu.dashboard") !!}</span>
                    </a>
                </li>
                <li class="header"></li>
                @if(in_array('admin.system.edit', $composer_auth_permissions))
                    <li class="{!! currentPageMenu(["*admin/system*"]) !!}">
                        <a href="{!! route("admin.system.edit", 'dalathasfarm') !!}">
                            <i class="material-icons">settings</i>
                            <span>{!! trans("admin_menu.system") !!}</span>
                        </a>
                    </li>
                @endif
                <li class="{!! currentPageMenu(["*admin/categories*", '*admin/categories*']) !!}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Categories</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{!! currentPageMenu(["*admin/categories*"]) !!}">
                            <a href="{!! route("admin.category.index") !!}">
                                <span>Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{!! currentPageMenu(["*admin/packages*", '*admin/packages*']) !!}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Packages</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{!! currentPageMenu(["*admin/packages*"]) !!}">
                            <a href="{!! route("admin.package.index") !!}">
                                <span>packages</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{!! currentPageMenu(["*admin/salon*", '*admin/salon*']) !!}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Salons</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{!! currentPageMenu(["*admin/salon*"]) !!}">
                            <a href="{!! route("admin.salon.index") !!}">
                                <span>Salons</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{!! currentPageMenu(["*admin/ads*", '*admin/ads*']) !!}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Ads</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{!! currentPageMenu(["*admin/ads*"]) !!}">
                            <a href="{!! route("admin.ads.index") !!}">
                                <span>ads</span>
                            </a>
                        </li>
                    </ul>
                </li>

                @if(in_array('admin.user.index', $composer_auth_permissions))
                    <li class="{!! currentPageMenu(["*admin/users*", '*admin/roles*']) !!}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_box</i>
                            <span>{!! trans("admin_menu.users") !!}</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{!! currentPageMenu(["*admin/users*"]) !!}">
                                <a href="{!! route("admin.user.index") !!}">
                                    <span>{!! trans("admin_menu.users") !!}</span>
                                </a>
                            </li>
                            <li class="{!! currentPageMenu(["*admin/roles*"]) !!}">
                                <a href="{!! route("admin.role.index") !!}">
                                    <span>{!! trans("admin_menu.roles") !!}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy;{!! date("Y") !!} <a href="javascript:void(0);">Admin NailJob.com</a>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>