@include('shelf.partials.branches.meta.hours')
<div class="container">
    <div class="row my-5">
        <div class="col-12 col-md-7">
            @include('shelf.partials.branches.meta.holidays')
        </div>
        <div class="col-12 col-md-5">
            <div class="slab-sidebar bg-white border p-3 position-relative z-4">
                <h3>Events</h3>
                <div class="slab-sidebar__content overflow-y-auto" style="height:19.5rem;">Content for this widget or
                    events</div>
                <div class="pt-2">
                    <a href="#URL" class="btn btn-primary d-block">View Calendar</a>
                </div>
            </div>
        </div>
    </div>
</div>
