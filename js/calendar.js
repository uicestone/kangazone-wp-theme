// requiere moment.js
// requiere bootstrap
// requiere jquery
// requiere calendar.css
// autor: Yordanch Vargas Velasque
// email: snd.yvv@gmail.com

moment.locale("zh-cn");
class CalendarYvv{
	constructor(title="", selectedDate="", weekStartDay="星期一") {
		this.title = title; // label where it will be displayed
		this.weekStartDay = weekStartDay; // start of the week
		this.selectedDate = selectedDate || moment().format("Y-MM-DD"); // selected day
		// console.log('selectedDate',this.selectedDate);
		this.onClick = function(e){}; // function to execute when launching the click event
		this.onNext = false; // function to execute when launching the click event
		this.onPrev = false; // function to execute when launching the click event
		this.currentSelected = moment().format("Y-MM-DD"); // selected item

		this.markedDays = []; // important days
		this.markedDaysColor = "#28a7454d"; // color of important days
		this.markedDaysTextColor = "#28a745"; // text color of important days

		this.bg = "bg-dark"; // header background color
		this.textColor = "text-white"; // text color in the header
		this.btnH = "btn-outline-light"; // normal button color
		this.btnD = "btn-rounded-success";// button color when hovering - "btn-outline-dark";

		this.__author = "Yordanch Vargas Velasque";
		this.__email = "snd.yvv@gmail.com";
		this.__version = "1.1.1";
	}
	startElements(){
		this.selectedDate = this.monthDatePadding(this.selectedDate);
		this.inicioDia = moment(this.selectedDate).format("dddd"); // start day of the month
		this.selectedMonth = this.selectedDate.split("-")[1]*1; // selected month
		this.selectedYear = this.selectedDate.split("-")[0]*1; // selected year
		this.daysCount = moment(this.selectedDate).daysInMonth()*1; // number of days of the month
		this.diasCoto = ["一", "二", "三", "四", "五", "六", "日"];
		this.diasLargo = ["星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"];
	}
	createCalendar(){
		this.startElements();
		var cont = $(this.title);
		var cntCale = $("<div class='calendar-yvv w-100'>");
		var headerCalendar = this.createHeaderM();
		var daysLettCalendar = this.createDayTag();
		var daysNumCalendar = this.createDaysMont();

		cont.html("");
		cntCale.append(headerCalendar);
		cntCale.append(daysLettCalendar);
		cntCale.append(daysNumCalendar);
		cont.append(cntCale);
	}
	createHeaderM(){
		var cont = $("<div class='d-flex justify-content-between p-2 border align-items-center border-bottom-0 "+this.bg+" "+this.textColor+"'>");
		var arrowL = $("<span class='btn "+this.btnH+"'>").html("<");
		var arrowR = $("<span class='btn "+this.btnH+"'>").html(">");
		var title = $("<span class='text-uppercase'>").html(moment(this.selectedDate).format("MMMM - Y"));
		var _this = this;

		arrowL.on("click", function(e){
			_this.mesAnterior(_this)
		});
		arrowR.on("click", function(e){
			_this.mesSiguiente(_this)
		});
		cont.append(arrowL);
		cont.append(title);
		cont.append(arrowR);
		return cont;
	}
	createDayTag(){
		var newPrimerDia = this.firtsMayus(this.weekStartDay);
		var diasOrd = this.ordenarDiasMes(newPrimerDia);

		var cont = $("<div class='d-flex border w-100 border-top-0 "+this.bg+" "+this.textColor+"'>");

		diasOrd.fechCort.forEach(function(e){
			var div = $("<div class='d-flex border flex-fill w-100 justify-content-center p-2'>").html(e);
			cont.append(div);
		});
		return cont;
	}
	createDaysMont(){
		var diaSelected = this.monthDatePadding(this.selectedYear + "-" + this.selectedMonth + "-01");
		var weekStartDayMes = moment(diaSelected).format("dddd");
		var diaInicio = this.firtsMayus(weekStartDayMes); //this.firtsMayus(this.inicioDia);
		var diasOrd = this.ordenarDiasMes(this.firtsMayus(this.weekStartDay));
		var posMes = diasOrd.fechLarg.indexOf(diaInicio);

		var cnt = 0;
		var cntG = $("<div class='w-100'>");

		var cont = $("<div class='d-flex border w-100 border-top-0'>");
		var emptyTag = "<div class='d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn' style='color:transparent'>";
		for(var j=0;j<posMes;j++){
			var div = $(emptyTag).html("0");
			cont.append(div);
			cnt++;
		}
		for(var i=0;i<this.daysCount;i++){
			var fechNow = this.monthDatePadding(this.selectedYear+"-"+this.selectedMonth+"-"+(i+1));
			// console.log('fetch now',fechNow,this.selectedDate,this.selectedDate==fechNow)
			var div = $("<div class='d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn "+this.btnD+"' data-date='"+fechNow+"'>").html(i+1);
			var clas_e = this;
			var _ind = (this.daysCount+posMes)%7;

			//dia seleccionado
			if(this.selectedDate==fechNow){
				div = $("<div class='current-date-selected d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn "+this.btnD+"' data-date='"+fechNow+"'>").html(i+1);
			}
			//dias resaltados o importantes
			if(this.markedDays.indexOf(i+1)!=-1){
				div = $("<div class='d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn "+this.btnD+"' data-date='"+fechNow+"' style='background: "+this.markedDaysColor+"; color: "+this.markedDaysTextColor+"; font-weight: bold;'>").html(i+1);
			}

			div.on("click", function(e){
				var daySelec = $(e.target).attr("data-date");
				clas_e.currentSelected = daySelec;
				clas_e.onClick(clas_e)
			});
			cont.append(div);
			if(cnt==6){
				//div.on("click", this.onClick);
				cntG.append(cont);
				cont = $("<div class='d-flex border w-100 border-top-0'>");
				cnt = 0;
			}else if(this.daysCount==(i+1)){
				for(var j=0;j<(7-_ind);j++){
					var div = $(emptyTag).html("0");
					cont.append(div);
					cnt++;
				}
				cntG.append(cont);
				cont = $("<div class='d-flex border w-100 border-top-0'>");
				cnt = 0;
			}else{
				//cont.append(div);
				cnt++;
			}
		}
		return cntG;
	}
	ordenarDiasMes(dia){
		var posMes = this.diasLargo.indexOf(dia);
		var fechCort = [];
		var fechLarg = [];

		for(var i=posMes;i<this.diasCoto.length;i++){
			fechCort.push(this.diasCoto[i]);
			fechLarg.push(this.diasLargo[i]);
		}
		for(var j=0;j<posMes;j++){
			fechCort.push(this.diasCoto[j]);
			fechLarg.push(this.diasLargo[j]);
		}
		return {fechCort, fechLarg};
	}
	firtsMayus(letter){
		var lett = "";
		for(var i=0;i<letter.length;i++){
			if(i==0) lett += "" + letter[i].toUpperCase();
			else lett += "" + letter[i].toLowerCase();
		}
		return lett;
	}
	mesAnterior(ev){
		ev.selectedMonth--;
		if(ev.selectedMonth==0){
			ev.selectedYear--;
			ev.selectedMonth=12;
		}
		var day = ev.selectedDate.split("-")[2]*1;
		ev.selectedDate = ev.selectedYear + "-" + ev.selectedMonth + "-" + day;
		ev.selectedDate = ev.monthDatePadding(ev.selectedDate);
		ev.daysCount = moment(ev.selectedDate).daysInMonth()*1;
		ev.createCalendar();

		if(this.onPrev){
			this.onPrev(ev)
		}else{
			ev.createCalendar();
		}
	}
	mesSiguiente(ev){
		ev.selectedMonth++;
		if(ev.selectedMonth==13){
			ev.selectedYear++;
			ev.selectedMonth=1;
		}
		var day = ev.selectedDate.split("-")[2]*1;
		ev.selectedDate = ev.selectedYear + "-" + ev.selectedMonth + "-" + day;
		ev.selectedDate = ev.monthDatePadding(ev.selectedDate);
		ev.daysCount = moment(ev.selectedDate).daysInMonth()*1;

		if(this.onNext){
			this.onNext(ev)
		}else{
			ev.createCalendar();
		}
	}
	monthDatePadding(_f){
		var fec = _f.split("-");
		fec[1] = (fec[1]<10&&fec[1].length==1)?("0"+fec[1]):fec[1];
		fec[2] = (fec[2]<10&&fec[2].length==1)?("0"+fec[2]):fec[2];
		return fec.join("-");
	}
}
