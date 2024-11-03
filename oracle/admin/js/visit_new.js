var color = new Array('rgba(87,92,98,1)', 'rgba(223,223,223,1)');
var color9 = new Array('rgba(137,170,205,1)');
var color10 = new Array('rgba(254,190,30,1)', 'rgba(217,217,217,1)');
var color11 = new Array('rgba(217,217,217,1)','rgba(254,190,30,1)');
var title = new Array('해당기간', '1년전')
var title1 = new Array('재방문자', '신규방문자')
var title2= new Array('PC', '모바일')
var dateformat = 'MM월DD일';//moment
var dateformat2= 'yyyy';
var dateformat3 ='dddd';
var direction = 'right';

$(window).load(function() {
	var today = moment().format('YYYY-MM-DD'); // 오늘
	var yesterday =moment().subtract(1,'day').format('YYYY-MM-DD'); // 어제
	var one_month =moment().subtract(1,'months').format('YYYY-MM-DD'); // 전월(한달전 오늘)
	var three_month = moment().subtract(3,'months').format('YYYY-MM-DD'); // 3개월전 오늘

	$('.date').text(today);
	dashboard()
	visit(1)	
	weekly()
	monthly()
	yearly()
});

$(document).ready(function(){
	
	
	$('input.week_start').change(function(){ // 시작일 변경 시 종료일 컨트롤
		var now = moment(new Date()).format('YYYY-MM-DD');
		var prev_date = moment($(this).val()).format('YYYY-MM-DD');
		var next_date = moment(prev_date).add(34, 'days').format('YYYY-MM-DD');
		if(moment.duration(moment(next_date, 'YYYY-MM-DD').diff(moment(now, 'YYYY-MM-DD'))).asDays() > 0) {
			alert('현재일을 초과하여 검색할 수 없습니다.');
			$(this).val('');
			return false;
		}
		$('input.week_end').val(next_date);
	});
	$('input.week_end').change(function(){ // 종료일 변경 시 시작일 컨트롤
		var now = moment(new Date()).format('YYYY-MM-DD');
		var prev_date = moment($(this).val()).format('YYYY-MM-DD');
		var next_date = moment(prev_date).subtract(34, 'days').format('YYYY-MM-DD');
		if(moment.duration(moment(prev_date, 'YYYY-MM-DD').diff(moment(now, 'YYYY-MM-DD'))).asDays() > 0) {
			alert('현재일을 초과하여 검색할 수 없습니다.');
			$(this).val('');
			return false;
		}
		$('input.week_start').val(next_date);
	});
	

	// 페이지 로드 후 모든 함수 호출
	for(var i=1; i<= 6; i++){
		data_visit(i);
	}
	
});

function downloadXlsx(id){
	var wb = XLSX.utils.table_to_book(document.getElementById(id), {sheet:"sheet1",raw:true});
	XLSX.writeFile(wb, ('google-analytics-report.xlsx'));
}

function nummberComman(e){
	if (e == null){
		return 0;
	}else{
		return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}	
}

function yearly() {
	var year = $('select[name="start_year"]').val();
	$('#yearly_statistic').html('')
	var device = $('label.active > input[name="year_device"]').val();
	$.ajax({
		url : g5_url + '/admin/analytics/json/ajax.ga.year.php',
		dataType: 'json',
		data:{year:year,device:device},
		type: 'POST',
		success : function(data){
			$('#year_title').text("TOTAL: "+nummberComman(data['total']));
			write_yearly_table(data['data'])
		}
	});
};

function write_yearly_table(response_date){
	response_date.forEach(element => {
		date = element[0];
		var ele_date = document.createElement("td");
		ele_date.innerHTML = date;

		var year_total = document.createElement("td");
		year_total.innerHTML = nummberComman(element[1]);

		var tr = document.createElement("tr");
		year_total.style.textAlign = 'center'

		tr.append(ele_date);
		tr.append(year_total);
		$('#yearly_statistic').append(tr);
	})
}


function monthly() {
	var year = $('select[name="monthly_year"]').val();
	var device = $('label.active > input[name="monthly_device"]').val();
	$('#monthly_statistic').html('')
	$.ajax({
		url : g5_url + '/admin/analytics/json/ajax.ga.this.year.month.php',
		dataType: 'json',
		data:{year:year,device:device},
		type: 'POST',
		success : function(data){			
			$('#month_title').text("TOTAL: "+nummberComman(data['total']));
			write_monthly_table(data['data'])
		}
	});
};

function write_monthly_table(response_date){
	response_date.forEach(element => {
		date = element['month']
		var ele_date = document.createElement("td");
		ele_date.innerHTML = date;

		var this_year_total = document.createElement("td");
		this_year_total.innerHTML = nummberComman(element['thisYear']);

		var before_year_total = document.createElement("td");
		before_year_total.innerHTML = nummberComman(element['beforeYear']);

		var tr = document.createElement("tr");
		this_year_total.style.textAlign = 'center'

		tr.append(ele_date);
		tr.append(this_year_total);
		tr.append(before_year_total);
		$('#monthly_statistic').append(tr);
	})
}

function weekly() {
	var start_date = $('input[name="week_start"]').val();
	var end_date = $('input[name="week_end"]').val();
	var device = $('label.active > input[name="weekly_device"]').val();
	$('#weekly_statistic').html('')
	$.ajax({
		url : g5_url + '/admin/analytics/json/ajax.ga.weekly.visitor.php',
		dataType: 'json',
		data:{start_date:start_date, end_date:end_date, device:device},
		type: 'POST',
		success : function(data){
			$('#week_title').text("TOTAL: "+nummberComman(data['total']));
			write_weekly_table(data['data'])
		}
	});
};

function write_weekly_table(response_date){
	response_date.forEach(element => {
		date = element[0]['start'] + ' ~ ' + element[0]['end']
		var ele_date = document.createElement("td");
		ele_date.innerHTML = date;

		var weekly_total = document.createElement("td");
		weekly_total.innerHTML = nummberComman(element[1]);

		var tr = document.createElement("tr");
		weekly_total.style.textAlign = 'center'

		tr.append(ele_date);
		tr.append(weekly_total);
		$('#weekly_statistic').append(tr);
	})
}

function visit(currentIndex) {
	var start_date = $('input[name="start_date"]').val();
	var end_date = $('input[name="end_date"]').val();
	var device = $('label.active > input[name="day_device"]').val();
	$('#statistic').html('')
	$.ajax({
		url : g5_url + '/admin/analytics/json/ajax.ga.visitor.php',
		dataType: 'json',
		data:{start_date:start_date, end_date:end_date,device:device,startIndex:currentIndex},
		type: 'POST',
		success : function(data){
			daily_paging(data['count'], currentIndex)
			$('#daily_total').text('TOTAL: '+nummberComman(data['total']))
			write_visit_table(data['data'])
		}
	});
};

function daily_paging(count, currentIndex){
	var limit_page_count = 10;
	var page_count = 0;
	if(count <= limit_page_count){
		page_count = 0
	}else{
		page_count = parseInt((count-1) / limit_page_count) + 1;
	}

	var span = document.createElement("span");
	span.className = 'pg_wrap'
	var inner_span = document.createElement("span");
	inner_span.className = 'pg'
	var first = null;
	var end = null;
	
	if(page_count >= 1){
		if(currentIndex == 1){
			for(var index = 1 ; index <= page_count ; index++){
				var pager = null;
				if(currentIndex == index){
					pager = document.createElement("a");
					pager.className = 'pg_current'
					pager.text = index
				}else{
					pager = document.createElement("a");
					pager.className = 'pg_page'
					pager.text = index
					pager.setAttribute('onclick', 'visit('+index+')')
				}
				inner_span.append(pager)
			}

			end = document.createElement("a");
			end.className = 'pg_page pg_start'
			end.text = '끝'	
			end.setAttribute('onclick', 'visit('+page_count+')')
			inner_span.append(end)

		}else if(currentIndex >= page_count){
			first = document.createElement("a");
			first.className = 'pg_page pg_start'
			first.text = '처음'
			first.setAttribute('onclick', 'visit('+1+')')
			inner_span.append(first)

			for(var index = 1 ; index <= page_count ; index++){
				var pager = null;
				if(currentIndex == index){
					pager = document.createElement("a");
					pager.className = 'pg_current'
					pager.text = index
				}else{
					pager = document.createElement("a");
					pager.className = 'pg_page'
					pager.text = index
					pager.setAttribute('onclick', 'visit('+index+')')
				}
				inner_span.append(pager)
			}

		}else{
			first = document.createElement("a");
			first.className = 'pg_page pg_start'
			first.text = '처음'
			first.setAttribute('onclick', 'visit('+1+')')
			inner_span.append(first)
			
			for(var index = 1 ; index <= page_count ; index++){
				var pager = null;
				if(currentIndex == index){
					pager = document.createElement("a");
					pager.className = 'pg_current'
					pager.text = index
				}else{
					pager = document.createElement("a");
					pager.className = 'pg_page'
					pager.text = index
					pager.setAttribute('onclick', 'visit('+index+')')
				}
				inner_span.append(pager)
			}
			end = document.createElement("a");
			end.className = 'pg_page pg_end'
			end.text = '끝'
			end.setAttribute('onclick', 'visit('+page_count+')')
			inner_span.append(end)
		}		
	}

	span.append(inner_span);
	$('div.page_bar.day').html('')
	$('div.page_bar.day').append(span);
}

function write_visit_table(response_date){
	var returning_visitor = ''
	var new_visitor = ''		
	var visitor = ''
	response_date.forEach(element => {
		// console.log(element)
		var date = ''
		var today_visitor = Number(element[1]['Total']);
		var returning_visitor_td = '';
		var returning_visitor_td_p = '';
		var new_visitor_td = '';
		var new_visitor_td_p = '';
		var visitor_td = '';
		var visitor_td_p = '';
		
		if(element[0].length == 10){
			date = element[0]
		}
		var ele_date = document.createElement("td");
		ele_date.innerHTML = date;

		var ele_returning = document.createElement("td");
		var ele_returning_v = document.createElement("td");
		var ele_returning_p = document.createElement("td");
		
		if(Number.isInteger(returning_visitor)){
			if(returning_visitor > element[1]['Returning Visitor']){
				returning_visitor_td = returning_visitor - element[1]['Returning Visitor']
				returning_visitor_td_p = (returning_visitor_td / returning_visitor * 100).toFixed(2)
				returning_visitor_td = "-" + returning_visitor_td
				returning_visitor_td_p = "-" + returning_visitor_td_p + "%"
				ele_returning_v.style.color = 'red'
				ele_returning_p.style.color = 'red'
			} else if(returning_visitor < element[1]['Returning Visitor']){
				returning_visitor_td = element[1]['Returning Visitor'] - returning_visitor
				returning_visitor_td_p = (returning_visitor_td / returning_visitor * 100).toFixed(2)
				returning_visitor_td = "+" + returning_visitor_td
				returning_visitor_td_p = "+" + returning_visitor_td_p + "%"
				ele_returning_v.style.color = 'blue'
				ele_returning_p.style.color = 'blue'
			}
		}
		ele_returning.innerHTML = element[1]['Returning Visitor'];
		ele_returning_v.innerHTML = returning_visitor_td;
		ele_returning_p.innerHTML = returning_visitor_td_p;
		
		var ele_new = document.createElement("td");
		var ele_new_v = document.createElement("td");
		var ele_new_p = document.createElement("td");
		if(Number.isInteger(new_visitor)){
			if(new_visitor > element[1]['New Visitor']){
				new_visitor_td = new_visitor - element[1]['New Visitor']
				new_visitor_td_p = (new_visitor_td / new_visitor * 100).toFixed(2)
				new_visitor_td = "-" + new_visitor_td
				new_visitor_td_p = "-" + new_visitor_td_p + "%"
				ele_new_v.style.color = 'red'
				ele_new_p.style.color = 'red'
			} else if(new_visitor < element[1]['New Visitor']){
				new_visitor_td = element[1]['New Visitor'] - new_visitor
				new_visitor_td_p = (new_visitor_td / new_visitor * 100).toFixed(2)
				new_visitor_td = "+" + new_visitor_td
				new_visitor_td_p = "+" + new_visitor_td_p + "%"
				ele_new_v.style.color = 'blue'
				ele_new_p.style.color = 'blue'
			}			
		}
		ele_new.innerHTML = element[1]['New Visitor'];
		ele_new_v.innerHTML = new_visitor_td;
		ele_new_p.innerHTML = new_visitor_td_p;
		

		var ele_visitor = document.createElement("td");
		var ele_visitor_v = document.createElement("td");
		var ele_visitor_p = document.createElement("td");
		if(Number.isInteger(visitor)){
			if(visitor > today_visitor){
				visitor_td = visitor - today_visitor
				visitor_td_p = (visitor_td / today_visitor * 100).toFixed(2)
				visitor_td = "-" + visitor_td
				visitor_td_p = "-" + visitor_td_p + "%"
				ele_visitor_v.style.color = 'red'
				ele_visitor_p.style.color = 'red'
			} else if(visitor < today_visitor){
				visitor_td = today_visitor - visitor
				visitor_td_p = (visitor_td / today_visitor * 100).toFixed(2)
				visitor_td = "+" + visitor_td
				visitor_td_p = "+" + visitor_td_p + "%"
				ele_visitor_v.style.color = 'blue'
				ele_visitor_p.style.color = 'blue'
			}
		}
		ele_visitor.innerHTML = today_visitor;
		ele_visitor_v.innerHTML = visitor_td;
		ele_visitor_p.innerHTML = visitor_td_p;

		var tr = document.createElement("tr");
		ele_returning.style.textAlign = 'center'
		tr.append(ele_date)
		tr.append(ele_returning);tr.append(ele_returning_v);tr.append(ele_returning_p);
		tr.append(ele_new);tr.append(ele_new_v);tr.append(ele_new_p);
		tr.append(ele_visitor);tr.append(ele_visitor_v);tr.append(ele_visitor_p);
		
		$('#statistic').append(tr)
		
		returning_visitor = Number(element[1]['Returning Visitor'])
		new_visitor = Number(element[1]['New Visitor'])
		visitor = Number(element[1]['Total'])
	});
}

dashboard_api_url = ['ajax.ga.all.day.php','ajax.ga.before.month.php','ajax.ga.today.php','ajax.ga.yesterday.php']
dashboard_elements = ['all', 'before_month','today','yesterday']
dashboard__custom_api_url = 'ajax.ga.returning.new.php'
function dashboard(){
	$.ajax({
		url : g5_url + '/admin/analytics/json/ajax.ga.dashboard.php',
		dataType: 'json',
		type: 'POST',
		success : function(data){
			console.log(data['allday'])
			$('.today').animateNumber({
				number:data['today'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

			$('.before_month').animateNumber({
				number:data['beforeMonth'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

			$('.yesterday').animateNumber({
				number:data['yesterday'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

			$('.all').animateNumber({
				number:data['allday'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

			$('.new').animateNumber({
				number:data['new'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

			$('.returning').animateNumber({
				number:data['returning'],
				numberStep: $.animateNumber.numberStepFactories.separator(',')
			});

		}
	});

	// $.ajax({
	// 	url : g5_url + '/admin/analytics/json/visitor_dashboard/ajax.ga.today.php',
	// 	async:false,
	// 	dataType: 'json',
	// 	type: 'POST',
	// 	success : function(data){
	// 		$('.today').animateNumber({
	// 			number:data,
	// 			numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 		});

	// 		$.ajax({
	// 			url : g5_url + '/admin/analytics/json/visitor_dashboard/ajax.ga.yesterday.php',
	// 			dataType: 'json',
	// 			type: 'POST',
	// 			success : function(data){
	// 				$('.yesterday').animateNumber({
	// 					number:data,
	// 					numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 				});
	// 			}
	// 		});
	// 	}
	// });

	// $.ajax({
	// 	url : g5_url + '/admin/analytics/json/visitor_dashboard/ajax.ga.yesterday.php',
	// 	async:false,
	// 	dataType: 'json',
	// 	type: 'POST',
	// 	success : function(data){
	// 		$('.yesterday').animateNumber({
	// 			number:data,
	// 			numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 		});
	// 	}
	// });

	// $.ajax({
	// 	url : g5_url + '/admin/analytics/json/visitor_dashboard/ajax.ga.all.day.php',
	// 	async:false,
	// 	dataType: 'json',
	// 	type: 'POST',
	// 	success : function(data){
	// 		$('.all').animateNumber({
	// 			number:data,
	// 			numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 		});
	// 	}
	// });

	// $.ajax({
	// 	url : g5_url + '/admin/analytics/json/visitor_dashboard/ajax.ga.before.month.php',
	// 	async:false,
	// 	dataType: 'json',
	// 	type: 'POST',
	// 	success : function(data){
	// 		$('.before_month').animateNumber({
	// 			number:data,
	// 			numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 		});
	// 	}
	// });
	

	// $.ajax({
	// 	url : g5_url + '/admin/analytics/json/visitor_dashboard/'+dashboard__custom_api_url,
	// 	async:false,
	// 	dataType: 'json',
	// 	type: 'POST',
	// 	success : function(data){
	// 		console.log(data)
	// 		for(var value of data){
	// 			console.log(value)
	// 			if (value[0] == 'New Visitor'){
	// 				$('.new').animateNumber({
	// 					number:value[1],
	// 					numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 				});
	// 			}
	// 			if(value[0] == 'Returning Visitor'){
	// 				$('.returning').animateNumber({
	// 					number:value[1],
	// 					numberStep: $.animateNumber.numberStepFactories.separator(',')
	// 				});
	// 			}
	// 		}
	// 	}
	// });
	

}


function data_excel(type, device, st_date, ed_date, page){
	var url1 = '';
	var url2 = '';
	var url3 = '';
	var url4 = '';
	var url5 = '';
	var url6 = '';
	switch(type){
		case 2:
			url2 = g5_url + '/admin/json/week_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date;
			break;
		case 3:
			url3 = g5_url + '/admin/json/month_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date;
			break;
		case 4:
			url4 = g5_url + '/admin/json/year_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date;
			break;
		case 5:
			url5 = g5_url + '/admin/json/time_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date;
			break;
		case 6:
			url6 = g5_url + '/admin/json/dayofweek_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date;
			break;
		default:
			url1 = g5_url + '/admin/json/day_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date+"&page"+page;
			break;
	}
	if(!device) device = '';
	if(!st_date) st_date = '';
	if(!ed_date) ed_date = '';
	if(!page) page = 1;

	if(type = 1){
		var total = $('input[name="total_page"]').val();
		$.ajax({
			url : url1,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date,total:total,page : page},
			type: 'POST',
			success : function(data){
				//console.log(data);
				location.href=g5_url +'/admin/json/visit.excel1.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}

	if(type = 2){
		$.ajax({
			url : url2,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date},
			type: 'POST',
			success : function(data){
				location.href=g5_url +'/admin/json/visit.excel2.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}

	if(type = 3){
		$.ajax({
			url : url3,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date},
			type: 'POST',
			success : function(data){
				location.href=g5_url +'/admin/json/visit.excel3.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}

	if(type = 4){
		$.ajax({
			url : url4,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date},
			type: 'POST',
			success : function(data){
				location.href=g5_url +'/admin/json/visit.excel4.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}

	if(type = 5){
		$.ajax({
			url : url5,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date},
			type: 'POST',
			success : function(data){
				location.href=g5_url +'/admin/json/visit.excel5.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}

	if(type = 6){
		$.ajax({
			url : url6,
			async : false,
			dataType : 'json',
			data:{device : device, st_date : st_date, ed_date : ed_date},
			type: 'POST',
			success : function(data){
				location.href=g5_url +'/admin/json/visit.excel6.php?data='+JSON.stringify(data)+"&device="+device+"&st_date="+st_date+"&ed_date="+ed_date;
			}
		});
	}


}

function data_visit(type, device, st_date, ed_date, page){
	if(!device) device = '';
	if(!st_date) st_date = '';
	if(!ed_date) ed_date = '';
	if(!page) page = 1;

	switch(type){
		case 2:
			var color_2 = new Array('#3b3b3b');
			if(device == "mobile") color_2 = new Array('#ffbe22');
			if(device == "PC") color_2 = new Array('#89aacd');
			if(ed_date == '') {
				ed_date = moment(new Date()).format('YYYY-MM-DD');
				$('input.week_end').val(ed_date);
			}
			if(st_date == ''){
				st_date =moment().subtract(34,'day').format('YYYY-MM-DD'); 
				$('input.week_start').val(st_date);
			}
			// chart('chart9', g5_url + '/admin/json/week_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date, 1, color_2, title, '', direction, 1, 'week_title');
			break;
		case 3:
			if(st_date == ''){
				 var today = new Date();
				 var today_year = today.getFullYear();
				$('.month_visit_date').val(today_year);
			}
			var color_3 = new Array('rgba(217,217,217,1)','#3b3b3b');
			if(device == "mobile"){ color_3 = new Array('rgba(217,217,217,1)','#ffbe22'); $('.search_year_text').css("color","#ffbe22");}
			if(device == "PC"){ color_3 = new Array('rgba(217,217,217,1)','#89aacd'); $('.search_year_text').css("color","#89aacd");}
			if(device == ""){ $('.search_year_text').css("color","#3b3b3b");}
			// chart('chart10', g5_url + '/admin/json/month_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date, 1, color_3, title, '', direction, 1, 'month_title','month');
			break;
		case 4:
			if(st_date == ''){
				 var today = new Date();
				 var today_year = today.getFullYear();
				$('.year_visit_date').val(today_year);
			}
			var color_4 = new Array('#3b3b3b');
			if(device == "mobile") color_4 = new Array('#ffbe22');
			if(device == "PC") color_4 = new Array('#89aacd');
			// chart('chart11', g5_url + '/admin/json/year_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date, 1, color_4, title, '', direction, 1, 'year_title');
			break;
		case 5:
			if(ed_date == '') {
				ed_date = moment(new Date()).format('YYYY-MM-DD');
				$('.end_time_date').val(ed_date);
			}
			if(st_date == ''){
				st_date =moment(new Date()).format('YYYY-MM-DD');
				$('.start_time_date').val(st_date);
			}
			// $.ajax({
			// 	url : g5_url + '/admin/json/time_visit.php',
			// 	dataType: 'json',
			// 	async : false,
			// 	data:{device : device, st_date : st_date, ed_date : ed_date},
			// 	type: 'POST',
			// 	success : function(data2){
			// 		var moon = '<div><i class="ri-moon-line"></i></div>';
			// 		var sun = '<div><i class="ri-sun-line"></i></div>';
			// 		var max = parseInt(data2.max);
			// 		data = data2.result;
			// 		for(var i=0; i<data.length; i++){
			// 			if(i < 12){
			// 				moon += '<li>'+i+'시</li><li><div class="time_databar" data-width="'+Math.round((80 / max) * data[i].value)+'"/>'+number_format(data[i].value)+'명</li>';
			// 			}else{
			// 				sun += '<li>'+i+'시</li><li><div class="time_databar" data-width="'+Math.round((80 / max) * data[i].value)+'"/>'+number_format(data[i].value)+'명</li>';
			// 			}
			// 		}
			// 		$('ul.moon').html(moon);
			// 		$('ul.sun').html(sun);
			// 		$('div.time_chart > ul > li > div').each(function(){
			// 			$(this).css('width', $(this).data('width')+'%');
			// 		});
			// 		if(device == "mobile") {$('.time_databar').css("background","#ffbe22")};
			// 		if(device == "PC") {$('.time_databar').css("background","#89aacd")};

			// 		$('.time_total').text('TOTAL '+number_format(data2.total));
			// 	}
			// });
			break;
		case 6:
		var color_6 = new Array('#3b3b3b');
		if(device == "mobile") color_6 = new Array('#ffbe22');
		if(device == "PC") color_6 = new Array('#89aacd');
			chart('chart13', g5_url + '/admin/json/dayofweek_visit.php?device='+device+'&st_date='+st_date+'&ed_date='+ed_date, 1, color_6, title, '', direction, 1, 'dayofweek_title');
			break;
		default:
			if(ed_date == '') {
				ed_date = moment(new Date()).format('YYYY-MM-DD');
				$('input.day_end').val(ed_date);
			}
			if(st_date == ''){
				st_date =moment().subtract(9,'day').format('YYYY-MM-DD'); // 어제
				$('input.day_start').val(st_date);
			}
			// $.ajax({
			// 	url : g5_url + '/admin/json/day_visit.php',
			// 	dataType: 'json',
			// 	async : false,
			// 	data:{device : device, st_date : st_date, ed_date : ed_date, page : page},
			// 	type: 'POST',
			// 	success : function(data){
			// 		//console.log(data);
			// 		var html = '';
			// 		var total = data.total;
			// 		var total2 = data.total2;
			// 		var max = data.max;
			// 		var total3 = data.total3;
			// 		data = data.result;
			// 		var total4;
			// 		for(var i=0; i<data.length; i++){
			// 			var per = Math.round(data[i].cnt / max * 100);
			// 			var prev_per = 0;
			// 			html += '<tr><td>'+data[i].date+'</td>';
			// 			html += '<td><div class="chart_line_new data_width" data-width="'+per+'"></div>';
			// 			if(data[i].per > 0) {
			// 				if(Math.round(per / 100 * (data[i].prev_cnt / data[i].cnt * 100)) > 99) prev_per = 100;
			// 				else prev_per = Math.round(per / 100 * (data[i].prev_cnt / data[i].cnt * 100));
			// 				html += '<div class="chart_line_old"><div class="data_width" data-width="'+prev_per+'"><p></p></div>';
			// 				html += '</div><div style="float:left; width: 100%;"><span style="font-size:10px;">(1개월전 '+data[i].prev_date+' / '+number_format(data[i].prev_cnt)+')</span></div></td>';
			// 				html += '<td>'+number_format(data[i].cnt)+'</td>';
			// 				html += '<td>'+number_format(data[i].prev_cnt)+'</td>';
			// 				//html += '<td>'+number_format(data[i].per)+'%</td></tr>';
			// 				//광고주 요청으로 삭제 20210621
			// 			}else{
			// 				html += '</td>';
			// 				html += '<td>'+data[i].cnt+'</td>';
			// 				html += '<td>0</td>';
			// 				//html += '<td>-</td></tr>';
			// 				//광고주 요청으로 삭제 20210621
			// 			}

			// 		}
			// 		console.log(total2);
			// 		var per2 = Math.round(( (total2 / total3) * 100), 2);
			// 		if(total3 == 0){
			// 			per2 = 0;
			// 		}
			// 		var per_style = 'color:#AAAAA';
			// 		if(per2 < 100) per_style = 'color:#1155cc';
			// 		if(per2 > 100) per_style = 'color:#EE0000';
			// 		$('input[name="total_page"]').val(total);
			// 		$('div.search_ranking.day > div.title > p').html('TOTAL  '+number_format(total2) + '<br><nobr>'+number_format(total3)+' ( <span style="'+per_style+'">' + number_format(per2) + '% </span>)</nobr>');
			// 		$('table.day > tbody').html(html);
			// 		if(device == "mobile") {$('.chart_line_new').css("background","#ffbe22")};
			// 		if(device == "PC") {$('.chart_line_new').css("background","#89aacd")};
			// 		$('div.data_width').each(function(){
			// 			$(this).css('width', $(this).data('width')+'%');
			// 		});

			// 		// $.ajax({
			// 		// 	url : g5_url + '/admin/json/day_paging.php',
			// 		// 	async : false,
			// 		// 	data:{device : device, st_date : st_date, ed_date : ed_date, total : total, page : page},
			// 		// 	type: 'POST',
			// 		// 	success : function(data){
			// 		// 		$('div.page_bar.day').html(data);
			// 		// 	}
			// 		// });
			// 	}
			// });
			break;
	}
}
function chart21(type, device, st_date, ed_date, page){
	if(!device) device = '';
	if(!st_date) st_date = '';
	if(!ed_date) ed_date = '';
	if(!page) page = 1;

	$.ajax({
		url : g5_url + '/admin/json/week_visit.php',
		dataType: 'json',
		data:{device : device, st_date : st_date, ed_date : ed_date},
		type: 'POST',
		success : function(data){
			data2 = data.result;
			if(data2[0].length == 4){$('.chart21_text > div > div').css('width','calc(100% / 6)');}
			if(data2[0].length == 2){$('.chart21_text > div > div').css('width','calc(100% / 3)');}
			if(data)
			$('.chart21_text1, .chart21_text2, .chart21_text3, .chart21_text4, .chart21_text5').text('');
			if(data2) {
				for(var i = 0; i < data2[0].length; i++){
					$('.chart21_text'+(i+1)).text(data2[0][i]['num']);
				}
			}
		}
	});

}
function search(type, f, word){
	var page = $('input[name="page"]', f).val();

	//var page = 1;
	var st_date = $('input[name="start_date"]', f).val();
	if(type == 3 || type == 4) st_date = $('select[name="start_date"]', f).val();
	var ed_date = $('input[name="end_date"]', f).val();
	var device = $('input[name="device"]:checked', f).val();
	if(device == 'all') device = '';
	if(type == 1) page = $('input[name="page"]', f).val();

	if(type == 2) chart21(type, device, st_date, ed_date, page);

	if(word == 'list') data_visit(type, device, st_date, ed_date, page);
	else data_excel(type, device, st_date, ed_date, page);
}
