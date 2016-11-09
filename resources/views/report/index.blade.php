@extends('layouts.obaju')
@section('title', 'Reports')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('reports_index') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h2>Reports</h2>
          <hr>

          <h3>Overall website statistics</h3>
          <b>Number of Users:</b> {{ $data['num_users']}} <br>
          <b>Number of Breeders:</b> {{ $data['num_breeders']}} <br>
          <b>Number of Breeds:</b> {{ $data['num_breeds']}} <br>
          <b>Overall Number of Ads:</b> {{ $data['num_ads_overall']}} <br>
          <b>Active Number of Ads:</b> {{ $data['num_ads_active']}} <br>
          <hr>

          <h3>Weekly Sales:</h3>
          <canvas id="weeklySales" width="400" height="100"></canvas>
          <hr>

          <div class="row">
            <div class="col-md-6">

              <h3>User Roles:</h3>
              <canvas id="userRoles" width="400" height="200"></canvas>
            </div>
            <div class="col-md-6">
              <h3>User Count:</h3>
              <canvas id="userCount" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection


  @section('js')
    <script>
    var ctx = document.getElementById("weeklySales");
    var weeklySales = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
          @foreach($data['orders'] as $order)
          '{{ str_limit($order->ad->title, 15) }}',
        @endforeach
        ],
        datasets: [{
          label: '# of Dogs Sold',
          data: [
          @foreach($data['orders'] as $order)
            {{ $order->quantity }},
          @endforeach
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    var userRolesCanvas = document.getElementById("userRoles");
    var userRoles = new Chart(userRolesCanvas, {
      type: 'pie',
      data: {
        labels: ['Admins', 'Moderators', 'Breeders'],
        datasets: [{
          label: 'User Balance (Roles)',
          data: [
          {{ $data['num_admin'] }},
          {{ $data['num_moderator'] }},
          {{ $data['num_breeders'] }},
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
    });

    var userCountCanvas = document.getElementById("userCount");
    var userCount = new Chart(userCountCanvas, {
      type: 'bar',
      data: {
        labels: ['Admins', 'Moderators', 'Breeders', 'Total Users'],
        datasets: [{
          label: 'User Balance (Roles)',
          data: [
          {{ $data['num_admin'] }},
          {{ $data['num_moderator'] }},
          {{ $data['num_breeders'] }},
          {{ $data['num_users'] }},
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
    });
  </script>
@endsection
