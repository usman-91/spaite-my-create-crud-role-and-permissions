    <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="sidemenu-logo">
                <a class="main-logo" href="{{route('dashboard')}}">
                    <img src="{{ asset('assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('assets/img/brand/icon-light.png') }}" class="header-brand-img icon-logo" alt="logo">
                    <img src="{{ asset('assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="{{ asset('assets/img/brand/icon.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);"><span class="shape1"></span><span class="shape2"></span><i class="mdi mdi-account-settings-variant sidemenu-icon"></i><span class="sidemenu-label">Roles & Permission</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('users')}}">User</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('role')}}">Roles</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('permission')}}">Permission</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header"><span class="nav-label">Applications</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="widgets.html"><span class="shape1"></span><span class="shape2"></span><i class="ti-server sidemenu-icon"></i><span class="sidemenu-label">Widgets</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon"></i><span class="sidemenu-label">Mail</span><span class="badge badge-warning side-badge">2</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mailinbox.html">Mail-Inbox</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="viewmail.html">View-Mail</a>
                            </li>
                        </ul>
                    </li>
             
                
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons01.html">Font Awesome</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons02.html">Material Design Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons03.html">Simple Line Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons04.html">Feather Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons05.html">Ionic Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons06.html">Flag Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons07.html">Pe7 Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons08.html">Themify Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons09.html">Typicons Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons10.html">Weather Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons11.html">Material Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mapmapel.html">Mapel Maps</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mapvector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tablebasic.html">Basic Tables</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tabledata.html">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Components</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="alerts.html">Alerts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="avatar.html">Avatar</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="buttons.html">Buttons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="badge.html">Badge</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="dropdown.html">Dropdown</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="thumbnails.html">Thumbnails</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="listgroup.html">List Group</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="navigation.html">Navigation</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="pagination.html">Pagination</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="popover.html">Popover</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="progress.html">Progress</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="spinners.html">Spinners</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mediaobject.html">Media Object</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="typography.html">Typography</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tooltip.html">Tooltip</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="toast.html">Toast</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tags.html">Tags</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="accordion.html">Accordion</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="carousel.html">Carousel</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="collapse.html">Collapse</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="counters.html">Counters</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="modals.html">Modals</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="timeline.html">Timeline</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="sweetalert.html">Sweet Alert</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="rating.html">Ratings</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="search.html">Search</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="userlist.html">Userlist</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span class="sidemenu-label">Forms</span><span class="badge badge-info side-badge">6</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formelements.html">Form Elements</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formadvanced.html">Advanced Forms</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formlayouts.html">Form Layouts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formvalidation.html">Form Validation</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formwizards.html">Form Wizards</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formeditor.html">WYSIWYG Editor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span class="sidemenu-label">Charts</span><span class="badge badge-danger side-badge">5</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartmorris.html">Morris Charts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartflot.html">Flot Charts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartchartjs.html">ChartJS</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartsparkpeity.html">Sparkline &amp; Peity</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartechart.html">Echart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Other Pages</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="profile.html">Profile</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="invoice.html">Invoice</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="pricing.html">Pricing</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="gallery.html">Gallery</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="faq.html">Faqs</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="successmessage.html">Success Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="dangermessage.html">Danger Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="warningmessage.html">Warning Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="empty.html">Empty Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="background">Background</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="border.html">Border</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="display.html">Display</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="flex.html">Flex</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="height.html">Height</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="margin.html">Margin</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="padding.html">Padding</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="position.html">Position</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="width.html">Width</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="extras.html">Extras</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="signin.html">Sign In</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="signup.html">Sign Up</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="forgot.html">Forgot Password</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="reset.html">Reset Password</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="lockscreen.html">Lockscreen</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="underconstruction.html">UnderConstruction</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="error404.html">404 Error</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="error500.html">500 Error</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidemenu -->        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo.png') }}" class="mobile-logo" alt="logo"></a>
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo-light.png') }}" class="mobile-logo-dark" alt="logo"></a>
                    </div>
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <select class="form-control select2-no-search">
                                <option label="All categories">
                                </option>
                                <option value="IT Projects">
                                    IT Projects
                                </option>
                                <option value="Business Case">
                                    Business Case
                                </option>
                                <option value="Microsoft Project">
                                    Microsoft Project
                                </option>
                                <option value="Risk Management">
                                    Risk Management
                                </option>
                                <option value="Team Building">
                                    Team Building
                                </option>
                            </select>
                        </div>
                        <input type="search" class="form-control" placeholder="Search for anything...">
                        <button class="btn search-btn"><i class="fe fe-search"></i></button>
                    </div>
                </div>
                <div class="main-header-right">
                    <div class="dropdown header-search">
                        <a class="nav-link icon header-search">
                            <i class="fe fe-search header-icons"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="main-form-search p-2">
                                <div class="input-group">
                                    <div class="input-group-btn search-panel">
                                        <select class="form-control select2-no-search">
                                            <option label="All categories">
                                            </option>
                                            <option value="IT Projects">
                                                IT Projects
                                            </option>
                                            <option value="Business Case">
                                                Business Case
                                            </option>
                                            <option value="Microsoft Project">
                                                Microsoft Project
                                            </option>
                                            <option value="Risk Management">
                                                Risk Management
                                            </option>
                                            <option value="Team Building">
                                                Team Building
                                            </option>
                                        </select>
                                    </div>
                                    <input type="search" class="form-control" placeholder="Search for anything...">
                                    <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-header-notification flag-dropdown">
                        <a class="nav-link icon country-Flag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item d-flex ">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/french_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">French</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/germany_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Germany</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/italy_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Italy</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/russia_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Russia</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/spain_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">spain</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link" href="#">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="avatar" src="{{ asset('assets/img/users/5.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="avatar" src="{{ asset('assets/img/users/2.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="avatar" src="{{ asset('assets/img/users/3.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user" ><img alt="avatar" src="{{ url('assets/user_image/'.Auth()->user()->image)}}"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">{!! Auth()->user()->name !!}</h6>
                               
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> My Profile
                            </a>
                           
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> Account Settings
                            </a>
                           
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="fe fe-power"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="fe fe-align-right header-icons"></i>
                        </a>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                </div>
            </div>
        </div>
        <!-- End Main Header-->		<!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown header-search">
                            <a class="nav-link icon header-search">
                                <i class="fe fe-search header-icons"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="main-form-search p-2">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <select class="form-control select2-no-search">
                                                <option label="All categories">
                                                </option>
                                                <option value="IT Projects">
                                                    IT Projects
                                                </option>
                                                <option value="Business Case">
                                                    Business Case
                                                </option>
                                                <option value="Microsoft Project">
                                                    Microsoft Project
                                                </option>
                                                <option value="Risk Management">
                                                    Risk Management
                                                </option>
                                                <option value="Team Building">
                                                    Team Building
                                                </option>
                                            </select>
                                        </div>
                                        <input type="search" class="form-control" placeholder="Search for anything...">
                                        <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown main-header-notification flag-dropdown">
                        <a class="nav-link icon country-Flag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item d-flex ">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/french_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">French</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/germany_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Germany</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/italy_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Italy</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/russia_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Russia</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/spain_flag.jpg') }}" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">spain</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown ">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="avatar" src="{{ asset('assets/img/users/5.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="avatar" src="{{ asset('assets/img/users/2.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="avatar" src="{{ asset('assets/img/users/3.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification mt-2">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user" ><img alt="avatar" src="{{ asset('assets/img/users/1.jpg') }}"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">{!! Auth()->user()->name !!}</h6>
                                <p class="main-notification-text">Web Designer</p>
                                
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> My Profile
                            </a>
                          
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> Account Settings
                            </a>
                           
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="fe fe-power"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <div class="dropdown  header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="fe fe-align-right header-icons"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->