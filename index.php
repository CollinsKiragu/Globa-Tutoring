<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Application Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="csss/main.css" rel="stylesheet" media="all">
	
	<link rel="stylesheet" href="build/css/intlTelInput.css">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="apply.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name" name="name" required>
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required>
                        </div>
						
						<div class="row row-space">
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Country" name="location" required>
                                </div>
                            </div>
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="tel" placeholder="Phone" name="phone" pattern="[0-9]{10}" id="phone" required>
							
                        </div>
						
                        
						
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="curriculum" required>
                                    <option disabled="disabled" selected="selected">Curriculum</option>
									<option>N/A</option>
                                    <option>British National Curriculum (BNC)</option>
                                    <option>North-American Curriculum [K-12]</option>
                                    <option>Kenya National Curriculum [8-4-4, CBC]</option>
									<option>International Baccalaureate [IB]</option>
									<option>Accelerated Christian Education [ACE]</option>
									<option>College Prep Exams & Other Examinations</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year" required>
                                    <option disabled="disabled" selected="selected">Year</option>
									<option>N/A</option>
                                    <option>Year 1</option>
                                    <option>Year 2</option>
                                    <option>Year 3</option>
									<option>Year 4</option>
									<option>Year 5</option>
									<option>Year 6</option>
									<option>Year 7</option>
									<option>Year 8</option>
									<option>Year 9</option>
									<option>Year 10</option>
									<option>Year 11</option>
									<option>Year 12</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="lesson" required>
                                    <optgroup label="Subject">
												<option disabled="disabled" selected="selected">Choose a Course or a Subject</option>
												<option value="Accounting">Accounting</option>
												<option value="Arabic">Arabic</option>
												<option value="Biology">Biology</option>
												<option value="Business Studies">Business Studies</option>
												<option value="Chemistry">Chemistry</option>
												<option value="Chinese">Chinese</option>
												<option value="Computer Science">Computer Science</option>
												<option value="Economics">Economics</option>
												<option value="English">English</option>
												<option value="French">French</option>
												<option value="Geography">Geography</option>
												<option value="German">German</option>
												<option value="History">History</option>
												<option value="Information Technology">Information Technology</option>
												<option value="Islamic Studies">Islamic Studies</option>
												<option value="Japanese">Japanese</option>
												<option value="Mathematics">Mathematics</option>
												<option value="Physics">Physics</option>
												<option value="Psychology">Psychology</option>
												<option value="Sociology">Sociology</option>
												<option value="Spanish">Spanish</option>
												
											</optgroup>
											<optgroup label="Course">
												<option value="Artificial Intelligence">Artificial Intelligence</option>
												<option value="Coding">Coding</option>
												<option value="Digital Marketing">Digital Marketing</option>
												<option value="Graphics Design">Graphics Design</option>
												<option value="Machine Learning">Machine Learning</option>
												<option value="Microsoft Certification">Microsoft Certification</option>
												<option value="Software Engineering">Software Engineering</option>
												<option value="Website Development">Website Development</option>
											</optgroup>	
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="mode" required>
                                    <option disabled="disabled" selected="selected">Mode of Learning</option>
                                    <option>Online</option>
                                    <option>Physical</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						
                        <div class="row row-space">
                            <div class="col-2">
							<span>Start Date:</span>
                                <div class="input-group">
                                    <!--<input class="input--style-1 js-datepicker" type="text" placeholder="Start Date" name="startdate">-->
									<input type=date  data-date-format='yy-mm-dd'  placeholder="Start Date:" name="startdate" required>
                                    <!--<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->	
                                </div>	
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" value="submit" >Submit</button>
							<button class="btn btn--radius btn--green" type="text" value="text" style="float:right"><a href="index.html">Home</a></button>
                        </div>
						
						
						
						
						
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jss/global.js"></script>
	
	<script src="build/js/intlTelInput.js"></script>
	<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>

</body>

</html>
<!-- end document-->
