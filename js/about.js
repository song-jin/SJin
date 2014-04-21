$(function() {
	$('container').highcharts({
		chart: {
			type:'bar'
		},
		title: {
			text:'My Skill'
		},
		xAxis:{
			categories:['HTML', 'CSS', 'JavaScript', 'PHP'],
			title:{
				text:null
			}
		},
		yAxis:{
			min:0,
			title:{
				text:'掌握程度',
				align:'high'
			},
			labels:{
				overflow:'justify'
			}
		},
		tooltip:{
			valueSuffix:'millions'
		},
		plotOptions:{
			bar:{
				dataLabels:{
					enabled:true
				}
			}
		},
		legend:{
			layout:'vertical',
			align:'right',
			verticalAlign:'top',
			x:-40,
			y:100,
			floating:true,
			borderWidth:1,
			backgroundColor:'#ffffff',
			shadow:true
		},
		credits: {
			enable:false
		},
		series:[{
			data:[50, 100, 150, 200]
		}]
	})
})