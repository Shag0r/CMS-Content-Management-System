<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cookie"></i></div>
                                Food
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="{{Route('breakfast')}}">Add Items</a> -->
                                    <a class="nav-link" href="{{Route('managebreakfast')}}"> <i class="fa-solid fa-mug-saucer"></i>&#8209; Breakfast Items</a>
                                    <a class="nav-link" href="{{Route('managelunch')}}"> <i class="fa-solid fa-bowl-rice"></i> &#8209;Lunch Items</a>
                                    <a class="nav-link" href="#"> <i class="fa-solid fa-utensils"></i> &#8209;Dinner Items</a>
                                </nav>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Shagor Kumar Das
                    </div>
                </nav>
            </div>