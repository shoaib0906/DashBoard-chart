  
  
  
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
