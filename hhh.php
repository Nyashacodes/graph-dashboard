<?php
 
$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
 
?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>DASHBOard</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

         <link rel="stylesheet" href="../font/font/flaticon.css">
      <link rel="stylesheet" href="./dash.css" type="text/css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript" src="./dash.js"></script>
      <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
              var data = google.visualization.arrayToDataTable([
                  ['Day', 'Sales' ],
                  ['Mon',  1000      ],
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
      </script>

      <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

  </head>
  


  
  <body>
  
  
  <div id="wrapper">
<!--    <div class="overlay"></div>
 -->    

    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 5px;">
                <a class="sidebar-brand" href="#">
          <span class="align-middle">Activity Dashboard</span>
        </a>

                 <ul class="navbar-nav align-self-stretch">
     
<li class="sidebar-header">
                        My Day
                    </li>
    <li class=""> 
          <a class="nav-link text-left active"  role="button" 
          aria-haspopup="true" aria-expanded="false">
       <i class="flaticon-bar-chart-1"></i>  Property
         </a>
          </li>
     
       <li class="has-sub"> 
          <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>    Activities
         </a>
          <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-lg-12 px-2">
                                    <div class="submenu-box"> 
                                        <ul class="list-unstyled m-0">
                                            <li><a href="#">Activity-one</a></li>
                                            <li><a href="#">Activity-two</a></li>
                                            <li><a href="#">Activity-three</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <footer class="footer">
                <div style="text-align: center">
                    <p> Your Dashboard</p>
                </div>
            </footer>
                            </div>
                        </div>
             </div>

          </div>

<!-- SIDENAVBAR PROPERTIES -->

          </li>
          <li class=""> 
          <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  Details
         </a>
          </li>
         
         <li class=""> 
          <a class="nav-link text-left"  role="button" href="#" >
       <i class="flaticon-bar-chart-1"></i> Property-two
         </a>
          </li>
        <li class=""> 
          <a class="nav-link text-left"  role="button" href="#">
       <i class="flaticon-bar-chart-1"></i>  -------
         </a>
         <a class="nav-link text-left"  role="button" href="#" >
       <i class="flaticon-bar-chart-1"></i>  ------- 
         </a>
         <a class="nav-link text-left"  role="button" href="#">
       <i class="flaticon-bar-chart-1"></i>  Data-1 
         </a>
         <a class="nav-link text-left"  role="button" href="#">
       <i class="flaticon-bar-chart-1"></i>  Data-2
         </a>
          <a class="nav-link text-left"  role="button" href="#">
       <i class="flaticon-bar-chart-1"></i>  Data-3
         </a>
          <a href="#"><div class="left-corner-name">logout </div></a>
          </li>
           
          
          </ul>

                
            </div>
       
       
    </nav>












        <div id="page-content-wrapper">
         
            
            <div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">

        <nav class="navbar navbar-expand navbar-light my-navbar">


            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
                <span></span>
                 <span></span>
            </div>
            


        

          <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown  d-sm-none">
         

              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                    placeholder="Search your data" >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


           <!-- <li class="nav-item dropdown">
                            <a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
                                <div class="position-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                   write the number of New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Notification Header</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>

            <li class="nav-item">
              <a class="nav-link " href="#"
             role="button">
                <i class="fas fa-envelope"></i>

                <span class="badge badge-danger badge-counter">7</span>
              </a>
            </li>
 -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
              	<i class="fa fa-calendar"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 12px;">Calender</span>
<!--                 <img class="img-profile rounded-circle" src="#" alt="Logo">
 -->              </a>
            </li>
              <form class="d-none d-sm-inline-block form-inline navbar-search" style="float: r">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Find your data" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>


          </ul>

        </nav>

        <div class="container-fluid px-lg-4">
<div class="row">
        <div class="col-md-12 mt-lg-4 mt-4">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Activity Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 
            Get Your Activity</a> -->

          </div>
         </div>
<div class="col-md-12">
    <div class="row" style="margin-left: 5px">
        
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon" >
                        <i class="fas fa-cloud-sun-rain"></i> 
                    </div>
                    <p class="card-category">Weather</p>
                    <h3 class="card-title">Cold outside</h3>
                                   </div>
                <div class="card-footer" style="height: 200px;">


                    
                </div>
            </div>
               	 <div id="chartContainer" style="height: 10px; width: 100px;"></div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon" style="height: 80px;" >
                    <div class="card-icon" >
                        <img src="https://img.icons8.com/fluent/48/000000/twitter.png"/>
                    </div>
                    <p class="card-category">Followers</p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer" style="height: 200px;">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-chart" style="width: 500px;">
	                <div class="card-header card-header-success">
	                    	<div id="curve_chart" ></div>
	                </div>
	                <div class="card-body">
	                    	<h4 class="card-title">Daily Sales</h4>
	                    	<p class="card-category">
	                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
	                </div>
	                <div class="card-footer">
	                    	<div class="stats">
	                        <i class="material-icons">access_time</i> updated 4 minutes ago
	                 		</div>
	                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <div id="donutchart" ></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Daily Sales</h4>
                    <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <div id="chart_div" style="width: 330px; height: 200px;"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Email Subscriptions</h4>
                    <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-danger">
                    <div id="piechart" ></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Completed Tasks</h4>
                    <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12" >
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary" style="background: green; max-width: 600px; opacity: 0.7">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title" >Tasks:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab" style="color: black !important;">
                                        <i class="material-icons" style="color: black">bug_report</i> Bugs
                                        <div class="ripple-container" style="color: black"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab" style="color: black!important;">
                                        <i class="material-icons">code</i> Website
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab" style="color: black!important;">
                                        <i class="material-icons">cloud</i> Server
                                        <div class="ripple-container" style="background: #3b7ddd !important;"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <table class="table">
                                <tbody>
                                <tr >
                                    <td >
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="messages">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="settings">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right"style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked style="border: none ; margin: 0 !important;">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right" style="display: inline-flex">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm"style="border: none ; margin: 0 !important;">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-warning" style="background: #008000 ; opacity: 0.7;    max-width: 580px; margin-left: 20px"  >
                    <h4 class="card-title" style="color: black">Employees Stats</h4>
                    <p class="card-category">New employees on July, 2020</p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Designation</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>&#8377 36,738</td>
                            <td>Designation</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>&#8377  23,789</td>
                            <td>Designation</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>&#8377 56,142</td>
                            <td>Designation</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td> &#8377 38,735</td>
                            <td>Designation</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

     

        
            
            
            
            <footer class="footer">
                <div style="text-align: center">
                    <p> Regex Software</p>
                </div>
            </footer>
            
        </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
    $(this).toggleClass('open');
    $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

   
   
 
       </div>
            </div>
        </div>
  </div>
  
  </body>
</html>
