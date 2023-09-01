<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
    <div class="card text-white bg-{{ $bg }} o-hidden h-80">
        <div class="card-body">
            <div class="text-center">
                <h3>{{ $totalCount}}</h3> Total {{ $bodyTitle }}
            </div>
        </div>
      <a class="card-footer text-white clearfix small z-1" href="{{ $route }}">
            <span class="float-left">View All {{ $footerTitle }}</span>
            <span class="float-right">
                <i class="fas fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>