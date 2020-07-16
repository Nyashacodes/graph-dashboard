google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Day', 'Sales' ],
        ['Mon',  1000],
        ['Tue',  1170],
        ['Wed',  660],
        ['Thus',  1030],
        ['Fri',  1230],
        ['Sat',  1530],
        ['Sun',  930]

    ]);

    var options = {
        title: 'Daily Sales',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}






// CHARTTTTT





    google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);

    var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
    chart.draw(view, options);
}










// SECOND CHART

    google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Week1', 'Week2', 'Week3', 'Week4', 'Week5', 'Average'],
        ['March',  165,      938,         522,             998,           450,      614.6],
        ['April',  135,      1120,        599,             1268,          288,      682],
        ['May',  157,      1167,        587,             807,           397,      623],
        ['June',  139,      1110,        615,             968,           215,      609.4],
        ['July',  136,      691,         629,             1026,          366,      569.6]
    ]);

    var options = {
        title : 'Email Subsricbtion Monthly',
        vAxis: {title: 'No of users'},
        hAxis: {title: 'Month'},
        seriesType: 'bars',
        series: {5: {type: 'line'}}        };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}









// THIRD CHART
    google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['No of Task', 'Time'],
        [' 9-12 am',  800  ],
        ['12-6pm',      1200],
        ['6-12am',  700],
        ['12-6am', 800],
        ['6-9am',    400]
    ]);

    var options = {
        title: 'Completed Task'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}





// DONUT CHART


google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }