@extends('layout/main')

@section('title', 'PRN BESS')

@section('container')
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>PRN BESS<span>.</span></h1>
          <h2>Smart Monitoring & Adaptive Control</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a class="nav-link scrollto" href="#about">Dashboard</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="nav-link scrollto" href="#services">Home</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Usages</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Cost</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Documentation</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
    <h1 class="mt-3 text-center">DASHBOARD</h1>
      <!--<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <h1 class="mt-3">Pemakaian Baterai</h1>  
        <div id="chart2" class="mt-5"></div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h1 class="mt-3">Pemakaian Baterai</h1>
        <div id="chart" class="mt-5"></div>
      </div>
    </div>-->
    <div class="row">
      <div class="col-md-12">
          <h3>Nilai Grid Voltage R</h3>
          <canvas id="myChart"></canvas>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

</main>
@endsection

@section('footer')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
  //const longLabels = [myChart.data.labels];
  //const labelsAdjusted = longLabels.map(label => label.split(' '));
  //console.log(labelsAdjusted)

  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['DefaultLabel'],
      datasets: [{
        label: 'Grid Voltage R',
        backgroundColor: ['rgba(255, 26, 104, 0.2)'],
        data: [],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        x: [{
          ticks: {
            font: {
              size: 8
            }
          }
        }],
        xAxes: [{
          scaleLabel: {
            display:true,
            labelString: 'Waktu'
          }
        }],
        yAxes: [{
          scaleLabel: {
            display:true,
            labelString: 'Nilai Voltage R'
          },
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
  var updateChart = function() {
    $.ajax({
      url: 'api/inverter',
      success: function(data) {
        myChart.data.labels = data.labels;
        myChart.data.datasets[0].data = data.data;
        myChart.update();
      },
      error: function(data){
        console.log(data);
      }
    });
  }
  
  updateChart();
  setInterval(() => {
    updateChart();
  }, 1000);
</script>

<script src="assets/js/dashboard/dash_1.js"></script>
@endsection