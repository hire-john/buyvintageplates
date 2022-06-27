<div id="sidebar-wrapper">
    <div id="side-bar-header" class="sidebar-heading">
        <div style="text-align: center; width:100%;position:relative;top:20px;">
            <span style="font-weight: bold; font-size: 30px;">{{ config('app.name') }}</span>
        </div>
    </div>
    <div id="side-bar-content">
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('dashboard')}}">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('inventory')}}">Product Inventory</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('accounting')}}">Sales & Accounting</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('tracking')}}">Order Tracking</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('reporting')}}">Reporting</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('product-references')}}">Referencing</a>
        </div>
    </div>
</div>