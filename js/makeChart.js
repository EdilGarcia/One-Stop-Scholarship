$(document).ready(function(){
	$.ajax({
		url: "http://localhost/TicketSystem/views/reports.php",
		method: "GET",
		success: function(arrCount) {
			alert(arrCount);
			var month = ["January","February","March","April","May","June","July", "August", "Sepetember", "October", "November", "December"];
			var visits = [];

			for (var count=0; count<12; count++) {
				visits.push(arrCount[count]);
			}

			var chartdata = {
				label: month,
				datasets: [
					{
						label: 'Number of Visits',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 0.75)',
						hoverBorderColor: 'rgba(200, 200, 200, 0.75)',
						data: visits
					}
				]
			};

			var canvas = $("#canvas");
			//print_r()
			var barGraph = new Chart(canvas, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(arrCount) {
			alert("Error");
		}
	});
});