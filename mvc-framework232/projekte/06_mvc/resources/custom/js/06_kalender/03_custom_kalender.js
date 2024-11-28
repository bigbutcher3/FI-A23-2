$(function () {


    let bothCals = $(".calendar");
    let clickedElement;
    let firstClicked;
    let secondClicked;
    let thirdClicked;
    let firstClick;
    let secondClick;
//var t=2013;
    let selected;
//var n=9;
    let daysArray = ["Montag", "Dienstag", "Mitwoch",
        "Donnerstag", "Freitag", "Samstag", "Sonntag"];
//var r = [];
    let i = ["JANUAR", "FEBRUAR", "MÄRZ", "APRIL", "MAI",
        "JUNI", "JULI", "AUGUST", "SEPTEMBER", "OKTOBER",
        "NOVEMBER", "DEZEMBER"];
    let year;
    let month;
    let nextMonth;
    let nextYear;
//var e=480;
    let today;

    function c(passed_month, passed_year, calNum) {
        let calendar = calNum === 0 ? calendars.cal1 : calendars.cal2;
        makeWeek(calendar.weekline);
        calendar.datesBody.empty();
        let calMonthArray = makeMonthArray(passed_month, passed_year);
        let r = 0;
        let u = false;
        while (!u) {
            if (daysArray[r] === calMonthArray[0].weekday) {
                u = true
            } else {
                calendar.datesBody.append('<div class="blank"></div>');
                r++;
            }
        }
        for (let cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
            if (cell >= calMonthArray.length) {
                calendar.datesBody.append('<div class="blank"></div>');
            } else {
                const shownDate = calMonthArray[cell].day;
                // Later refactiroing -- iter_date not needed after "today" is found
                const iter_date = new Date(passed_year, passed_month, shownDate);
                let m = '';
                if (
                    (
                        (shownDate !== today.getDate() && passed_month === today.getMonth())
                        || passed_month !== today.getMonth()
                    )
                    && iter_date < today) {
                    m = '<div class="past-date">';
                } else {
                    m = checkToday(iter_date) ? '<div class="today">' : "<div>";
                }
                calendar.datesBody.append(m + shownDate + "</div>");
            }
        }

        // var color = o[passed_month];
        calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
        //.css("background-color",color)
        //.find("h2").text(i[passed_month]+" "+year);

        // find elements (dates) to be clicked on each time
        // the calendar is generated

        //clickedElement = bothCals.find(".calendar_content").find("div");
        let clicked = false;
        selectDates(selected);

        clickedElement = calendar.datesBody.find('div');
        clickedElement.on("click", function () {
            clicked = $(this);
            if (clicked.hasClass('past-date')) {
                return;
            }
            // let whichCalendar = calendar.name;
            // console.log(whichCalendar);
            // Understading which element was clicked;

            //let parentClass = $(this).parent().parent().attr('class');
            // console.log(parentClass);
            if (firstClick && secondClick) {
                thirdClicked = getClickedInfo(clicked, calendar);
                let firstClickDateObj = new Date(firstClicked.year,
                    firstClicked.month,
                    firstClicked.date);
                //console.log(firstClicked.date);
                let secondClickDateObj = new Date(secondClicked.year,
                    secondClicked.month,
                    secondClicked.date);
                let thirdClickDateObj = new Date(thirdClicked.year,
                    thirdClicked.month,
                    thirdClicked.date);
                //console.log(thirdClicked.date);
                if (secondClickDateObj > thirdClickDateObj
                    && thirdClickDateObj > firstClickDateObj) {
                    secondClicked = thirdClicked;
                    // then choose dates again from the start :)
                    bothCals.find(".calendar_content").find("div").each(function () {
                        $(this).removeClass("selected");
                    });
                    selected = {};
                    selected[firstClicked.year] = {};
                    selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                    selected = addChosenDates(firstClicked, secondClicked, selected);
                } else { // reset clicks
                    selected = {};
                    firstClicked = [];
                    secondClicked = [];
                    firstClick = false;
                    secondClick = false;
                    bothCals.find(".calendar_content").find("div").each(function () {
                        $(this).removeClass("selected");
                    });
                }
            }
            if (!firstClick) {

                firstClick = true;
                firstClicked = getClickedInfo(clicked, calendar);
                selected[firstClicked.year] = {};
                selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

            } else {
                secondClick = true;
                secondClicked = getClickedInfo(clicked, calendar);
                //console.log(secondClicked);
                let anreise = (firstClicked.date < 10 ? '0' + firstClicked.date : firstClicked.date) + '-' + (firstClicked.month + 1 < 10 ? '0' + (firstClicked.month + 1) : (firstClicked.month + 1)) + '-' + firstClicked.year;
                let abreise = (secondClicked.date < 10 ? '0' + secondClicked.date : secondClicked.date) + '-' + (secondClicked.month + 1 < 10 ? '0' + (secondClicked.month + 1) : (secondClicked.month + 1)) + '-' + secondClicked.year;

                sendData(anreise, abreise);

                // what if second clicked date is before the first clicked?
                let firstClickDateObj1 = new Date(firstClicked.year,
                    firstClicked.month,
                    firstClicked.date);
                let secondClickDateObj1 = new Date(secondClicked.year,
                    secondClicked.month,
                    secondClicked.date);

                if (firstClickDateObj1 > secondClickDateObj1) {

                    let cachedClickedInfo = secondClicked;
                    secondClicked = firstClicked;
                    firstClicked = cachedClickedInfo;
                    selected = {};
                    selected[firstClicked.year] = {};
                    selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

                } else if (firstClickDateObj1.getTime() ===
                    secondClickDateObj1.getTime()) {
                    selected = {};
                    firstClicked = [];
                    secondClicked = [];
                    firstClick = false;
                    secondClick = false;
                    $(this).removeClass("selected");
                }


                // add between dates to [selected]
                selected = addChosenDates(firstClicked, secondClicked, selected);
            }

            selectDates(selected);
        });

    }

    function selectDates(selected) {
        if (!$.isEmptyObject(selected)) {
            let dateElements1 = datesBody1.find('div');
            let dateElements2 = datesBody2.find('div');

            function highlightDates(passed_year, passed_month, dateElements) {
                if (passed_year in selected && passed_month in selected[passed_year]) {
                    let daysToCompare = selected[passed_year][passed_month];
                    for (let d in daysToCompare) {
                        dateElements.each(function () {
                            if (parseInt($(this).text()) === daysToCompare[d]) {
                                //console.log(this);
                                $(this).addClass('selected');
                            }
                        });
                    }
                }
            }


            highlightDates(year, month, dateElements1);
            highlightDates(nextYear, nextMonth, dateElements2);
        }
    }

    function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
        let e = [];
        for (let r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
            e.push({
                day: r,
                // Later refactor -- weekday needed only for first week
                weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
            });
        }
        return e;
    }

    function makeWeek(week) {
        week.empty();
        for (let e = 0; e < 7; e++) {
            week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
        }
    }

    function getDaysInMonth(currentYear, currentMon) {
        return (new Date(currentYear, currentMon + 1, 0)).getDate();
    }

    function getWeekdayNum(e, t, n) {
        return (new Date(e, t, n)).getDay();
    }

    function checkToday(e) {
        let todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
        let checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
        return todayDate === checkingDate;

    }

    function getAdjacentMonth(curr_month, curr_year, direction) {
        let theNextMonth;
        let theNextYear;
        if (direction === "next") {
            theNextMonth = (curr_month + 1) % 12;
            theNextYear = (curr_month === 11) ? curr_year + 1 : curr_year;
        } else {
            theNextMonth = (curr_month === 0) ? 11 : curr_month - 1;
            theNextYear = (curr_month === 0) ? curr_year - 1 : curr_year;
        }
        return [theNextMonth, theNextYear];
    }

    function b() {
        today = new Date;
        year = today.getFullYear();
        month = today.getMonth();
        let nextDates = getAdjacentMonth(month, year, "next");
        nextMonth = nextDates[0];
        nextYear = nextDates[1];
    }

    //var o = ["#16a085","#1abc9c","#c0392b","#27ae60",
    //  "#FF6860","#f39c12","#f1c40f","#e67e22",
    //   "#2ecc71","#e74c3c","#d35400","#2c3e50"];

    let cal1 = $("#calendar_first");
    let calHeader1 = cal1.find(".calendar_header");
    let weekline1 = cal1.find(".calendar_weekdays");
    let datesBody1;
    datesBody1 = cal1.find(".calendar_content");
    let cal2;
    cal2 = $("#calendar_second");
    let calHeader2
    calHeader2 = cal2.find(".calendar_header");

    let weekline2;
    weekline2 = cal2.find(".calendar_weekdays");

    let datesBody2;
    datesBody2 = cal2.find(".calendar_content");


    let switchButton = bothCals.find(".calendar_header").find('.switch-month');
    let calendars;
    calendars = {
        "cal1": {
            "name": "first",
            "calHeader": calHeader1,
            "weekline": weekline1,
            "datesBody": datesBody1
        },
        "cal2": {
            "name": "second",
            "calHeader": calHeader2,
            "weekline": weekline2,
            "datesBody": datesBody2
        }
    }


    firstClick = false;
    secondClick = false;
    selected = {};

    b();
    c(month, year, 0);
    c(nextMonth, nextYear, 1);
    switchButton.on("click", function () {
        let clicked = $(this);

        let generateCalendars = function (e) {
            let nextDatesFirst = getAdjacentMonth(month, year, e);
            let nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
            month = nextDatesFirst[0];
            year = nextDatesFirst[1];
            nextMonth = nextDatesSecond[0];
            nextYear = nextDatesSecond[1];

            c(month, year, 0);
            c(nextMonth, nextYear, 1);
        };
        if (clicked.attr("class").indexOf("left") !== -1) {
            generateCalendars("previous");
        } else {
            generateCalendars("next");
        }
        clickedElement = bothCals.find(".calendar_content").find("div");
        //console.log("checking");
    });


    //  Click picking stuff
    function getClickedInfo(element, calendar) {
        let clickedCalendar,
            clickedMonth,
            clickedInfo,
            clickedYear;
        clickedCalendar = calendar.name;
        //console.log(element.parent().parent().attr('class'));
        clickedMonth = clickedCalendar === "first" ? month : nextMonth;
        clickedYear = clickedCalendar === "first" ? year : nextYear;
        clickedInfo = {
            "calNum": clickedCalendar,
            "date": parseInt(element.text()),
            "month": clickedMonth,
            "year": clickedYear
        }
        //console.log(clickedInfo);
        return clickedInfo;
    }


    // Finding between dates MADNESS. Needs refactoring and smartening up :)
    function addChosenDates(firstClicked, secondClicked, selected) {
        if (secondClicked.date > firstClicked.date ||
            secondClicked.month > firstClicked.month ||
            secondClicked.year > firstClicked.year) {

            let added_year = secondClicked.year;
            let added_month = secondClicked.month;
            let added_date = secondClicked.date;


            if (added_year > firstClicked.year) {
                // first add all dates from all months of Second-Clicked-Year
                selected[added_year] = {};
                selected[added_year][added_month] = [];
                for (let i = 1;
                     i <= secondClicked.date;
                     i++) {
                    selected[added_year][added_month].push(i);
                }

                added_month = added_month - 1;
                //console.log(added_month);
                while (added_month >= 0) {
                    selected[added_year][added_month] = [];
                    for (let i = 1;
                         i <= getDaysInMonth(added_year, added_month);
                         i++) {
                        selected[added_year][added_month].push(i);
                    }
                    added_month = added_month - 1;
                }

                added_year = added_year - 1;
                added_month = 11; // reset month to Dec because we decreased year
                added_date = getDaysInMonth(added_year, added_month); // reset date as well

                // Now add all dates from all months of inbetween years
                while (added_year > firstClicked.year) {
                    selected[added_year] = {};
                    for (let i = 0; i < 12; i++) {
                        selected[added_year][i] = [];
                        for (let d = 1; d <= getDaysInMonth(added_year, i); d++) {
                            selected[added_year][i].push(d);
                        }
                    }
                    added_year = added_year - 1;
                }
            }

            if (added_month > firstClicked.month) {
                if (firstClicked.year === secondClicked.year) {
                    //console.log("here is the month:", added_month);
                    selected[added_year][added_month] = [];
                    for (let i = 1;
                         i <= secondClicked.date;
                         i++) {
                        selected[added_year][added_month].push(i);
                    }
                    added_month = added_month - 1;
                }
                while (added_month > firstClicked.month) {
                    selected[added_year][added_month] = [];
                    for (let i = 1;
                         i <= getDaysInMonth(added_year, added_month);
                         i++) {
                        selected[added_year][added_month].push(i);
                    }
                    added_month = added_month - 1;
                }
                added_date = getDaysInMonth(added_year, added_month);
            }

            for (let i = firstClicked.date;
                 i <= added_date;
                 i++) {
                selected[added_year][added_month].push(i);
            }
        }
        return selected;
    }

    function sendData(anreise, abreise) {
        let formData = new FormData();
        formData.append("anreise", anreise);
        formData.append("abreise", abreise);
        let request = new XMLHttpRequest();
        request.open("POST", '/home/daten'); // POST Request an ein .php Script zum Verarbeiten
        request.send(formData);
    }

    $('#heute').on('click', function () {
        b();
        c(month, year, 0);
        c(nextMonth, nextYear, 1);
    });
});