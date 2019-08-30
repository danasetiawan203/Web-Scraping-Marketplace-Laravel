@extends('admin.layouts.app')
@section('title','Dashboard Dropshipping UMKM')

@section('content')


	<!-- Page container -->
	
	<div class="page-container">
		@if(session()->has('success'))
                    <div class="alert alert-success">
                        <strong>Berhasil!</strong> {{ session()->get('success') }}
                    </div>
                    @elseif ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                          </ul>
                      </div>
              @endif
		<!-- Page content -->
		<div class="page-content">


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">




					


					<!-- Dashboard content -->

					<div class="row">
						
						<div class="col-lg-12">


							<!-- Quick stats boxes -->
							<div class="row">


								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="panel panel-body">
										<div class="media no-margin">
											<div class="media-left media-middle">
												<i class="fas fa-cogs text-indigo-300 fa-5x"></i>
											</div>

											<div class="media-body text-right">
												<h3 class="no-margin text-semibold">{{$total}}</h3>
												<span class="text-uppercase text-size-mini text-muted">Total Scraping Produk</span>
											</div>
										</div>
									</div>
									<!-- /today's revenue -->

								</div>		


							</div>
							
						</div>

						<div class="col-lg-4">

							<!-- Progress counters -->
							<div class="row">
								<div class="col-md-6">

								</div>

								<div class="col-md-6">

									<!-- Productivity goal -->

									<!-- /productivity goal -->

								</div>
							</div>
							<!-- /progress counters -->


							<!-- Daily sales -->

							<!-- /daily sales -->


							<!-- My messages -->

							<!-- /my messages -->


							<!-- Daily financials -->

							<!-- /daily financials -->

						</div>
					</div>
					<!-- /dashboard content -->

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-1">
								<div id="hightchart" style="min-width: 1200px; height: 500px; max-width: 1000px; margin: 0 auto"></div>
						</div>
					</div>
					<br>
					<br>
					<!-- /main charts -->				


					<!-- Footer -->

						@include('admin.include.footer')

					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<script>
	// Command: toastr["success"]("Direkomdeasikan menggunakan google chrome", "Selamat Datang")

	toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

if($('#succesToast').is(':visible')) {
	toastr.success("Direkomendasikan menggunakan google chrome", "Selamat Datang");
}
	</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

	Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

	Highcharts.chart('hightchart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah scraping produk pada masing-masing marketplace'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y} Produk</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            },
			showInLegend: true
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [{
            name: ':Lazada',
            y: {{$lazadas}},
            sliced: true,
            selected: true
        },{
			name: 'Kriya',
            y: {{$kriyas}}
		},{
			name: 'Bukalapak',
            y: {{$bukalapaks}}
		},{
			name: 'Alibaba',
            y: {{$alibabas}}
		},{
			name: 'Tokopedia',
            y: {{$tokopedias}}
		},{
			name: 'Blanja.com',
            y: {{$blanjas}}
		},{
			name: 'Zilingo',
            y: {{$zilingos}}
		},{
			name: 'Zalora',
            y: {{$zaloras}}
		},{
			name: 'Amazon',
            y: {{$amazons}}
		}]
    }]
});
</script>



@endsection
