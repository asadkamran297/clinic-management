<div class="scroll-sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-devider"></li>
            <li class="nav-small-cap">PERSONAL</li>
            {{-- <li> <a class="waves-effect waves-dark" href="{{ route('userarea.dashboard') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
            </li> --}}
            <li> <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.orders.index') }}" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">View Orders</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('userarea.orders.payment_awaiting') }}">Payment Awaiting</a></li>
                    <li><a href="{{ route('userarea.orders.pending') }}">Pending </a></li>
                    <li><a href="{{ route('userarea.orders.completed') }}">Completed</a></li>
                    {{-- <li><a href="#">Delivered</a></li> --}}
                    {{-- <li><a href="#">Modified</a></li> --}}
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-library-plus"></i><span class="hide-menu">Create New Orders</span></a>
            </li>
            {{-- <li> <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.quotes.index') }}" aria-expanded="false"><i class="mdi mdi-format-quote"></i><span class="hide-menu">Get Quote</span></a>
            </li> --}}
            {{-- <li> <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.writers.index') }}" aria-expanded="false"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu">Writers</span></a> --}}
            </li>
        </ul>
    </nav>
</div>