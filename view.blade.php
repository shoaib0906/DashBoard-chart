  
  <div class="row">

			<div class="col-sm-12">

				<div class="box-info">

					<h2><strong>{!! trans('Employee') !!}</strong> {!! trans('Statistic') !!}</h2>

					<div id="website-statistic" class="statistic-chart collapse in">

						<div id="morris-home" style="height: 200px;"></div>

					</div>

				</div>

				

			</div>

		</div>

  
  <script type="text/javascript">
    
    if ($('#morris-home').length > 0){
    //MORRIS
    Morris.Area({
      element: 'morris-home',
      data: [ {!! $graph_data !!}
      ],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Bond Amount'],
      resize: true,
      lineColors: ['#5CB85C', '#2891CD']
    });
    }
    
  </script>
