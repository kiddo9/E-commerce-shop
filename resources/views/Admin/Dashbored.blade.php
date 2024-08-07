<x-layout>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div class="lg:flex" id="Dashbored">
       <x-AdminNav />
    <div class="w-full mx-auto lg:mr-4 lg:ml-80">
        <div class="flex flex-col gap-5 px-3 mt-4 lg:flex-row lg:justify-around">
            <div class="px-4 py-2 bg-gray-300 rounded-lg shadow-xl lg:w-64">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
              </svg>
            <p>Orders</p>
            <h3>500</h3>
            <h4>Today</h4>
        </div>

        <div class="px-4 py-2 bg-gray-300 rounded-lg shadow-xl lg:w-64">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              <p>Products</p>
            <h3>500</h3>
            <h4>Updated: 24th may, 2023</h4>
        </div>

        <div class="px-4 py-2 bg-gray-300 rounded-lg shadow-xl lg:w-64">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              <p>Customers</p>
              <h3>500</h3>
        </div>
        </div>

        <div id="chart_div" class="lg:w-full h-[500px]"></div>

        <div>
            <h2 class="mb-4 text-xl font-bold">FeedBacks of Products</h2>
            <div class="flex flex-col gap-4">
                <div class="px-3 py-3 bg-gray-300 rounded-lg shadow-md">
                    <h3 class="text-lg font-medium">Jeffery Waw</h3>
                    <p>By default, the area chart draws the series on top of one another. You can stack them atop one another instead, so that the data values at each are summed</p>
                </div>

                <div class="px-3 py-3 bg-gray-300 rounded-lg shadow-md">
                    <h3 class="text-lg font-medium">Zues Edwam</h3>
                    <p>By default, the area chart draws the series on top of one another. You can stack them atop one another instead, so that the data values at each are summed</p>
                </div>

                <div class="px-3 py-3 bg-gray-300 rounded-lg shadow-md">
                    <h3 class="text-lg font-medium">Chibrish Faith</h3>
                    <p>By default, the area chart draws the series on top of one another. You can stack them atop one another instead, so that the data values at each are summed</p>
                </div>
            </div>
        </div>
    </div>

    </div>
</x-layout>
