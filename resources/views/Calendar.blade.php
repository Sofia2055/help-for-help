<x-body>
    @section('title', 'Calendar')

    <style>
        /* General styles */
        .container_calendar {
            width: 400px;
            height: 550px;
            margin: 5% auto;
        }

        /* Header styles */
        .header_calendar {
            width: 100%;
            height: 45%;
            background: linear gradient(#7F99F5, #6bc72a);
            background: #6bc72a;
            border-radius: 15px 15px 0px 0px;
            display: flex;
            flex-direction: column;
        }

        .header_calendar h1 {
            margin: 30px 30px 0px 30px;
            padding: 0px;
            font-family: Arial;
            color: white;
            font-size: 100px;
        }

        .header_calendar h5 {
            margin: 0px 30px;
            padding: 0px;
            font-family: Arial;
            color: white;
            font-size: 40px;
        }

        /* Details styles */
        .body_calendar {
            width: 100%;
            height: 55%;
            background: white;
            border-radius: 0px 0px 15px 15px;
        }

        .container_details {
            width: 100%;
            height: 30px;
            position: relative;
            top: -13px;
            display: flex;
            justify-content: space-between;
        }

        .container_details .detail_1,
        .container_details .detail_2 {
            width: 70px;
            height: 100%;
            display: flex;
            justify-content: center;
        }

        .container_details .detail_1 .detail,
        .container_details .detail_2 .detail {
            margin: 0px 2px;
            width: 10px;
            height: 100%;
        }

        .container_details .detail_1 .detail .circle,
        .container_details .detail_2 .detail .circle {
            width: 10px;
            height: 10px;
            background: #1C1E26;
            position: relative;
            top: calc(30px - 10px);
            border-radius: 50%;
        }

        .container_details .detail_1 .detail .circle .column,
        .container_details .detail_2 .detail .circle .column {
            width: 80%;
            height: 30px;
            background: #ececec;
            margin: 0px auto;
            position: relative;
            top: -22px;
            border-radius: 5px;
        }

        /* Month change styles */
        .container_change_month {
            width: 100%;
            height: 25px;
            display: flex;
            justify-content: space-evenly;
            opacity: 0.7;
        }

        .container_change_month div {
            height: 20px;
            margin: auto;

        }

        .container_change_month button {

            font-size: 20px;
            margin: auto 5px;
            border: none;
            background: none;
            cursor: pointer;

        }

        /* Weekday styles */
        .container_weedays {
            width: 90%;
            height: 40px;
            display: flex;
            margin: 0px auto;
        }

        .container_weedays span {
            color: #506CF5;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            height: 100%;
            line-height: 2.5;
        }

        .week_days_item {
            display: flex;
            margin: auto;
            width: calc(100% / 7);
            justify-content: center;
            cursor: pointer;
        }

        .week_days_item:hover {
            color: #506CF5;
        }

        .prev_days {
            opacity: 0.5;
        }

        /* Days container styles */
        .container_days {
            width: 90%;
            height: auto;
            display: flex;
            flex-flow: row wrap;
            margin: 0px auto;
        }

        .container_days span {
            color: #4e4e4e;
            height: 20px;
            margin: 5px 0px;
            padding: 0px;
            font-family: Arial;
        }

        .container_days .today {
            display: flex;
            display: flex;
        justify-content: center; /* Centrar horizontalmente */
        align-items: center;
        }

        .container_days .today:after {
            content: "";
            width: 19px;
            height: 19px;
            background: #6bc72a;
            position: absolute;
            border-radius: 50%;
            border: 5px solid #6bc72a;
            opacity: 0.6;
            margin: -5px 0px 0px 1px;
        }

        @media (max-width: 767px) { /* Apply styles for screens up to 767px wide (typical mobile screens) */
            .container_calendar {
                margin: 5% 2%; /* Adjust margins for smaller screens */
            }

            .header_calendar h1 {
                font-size: 6vw; /* Further adjust font size for smaller screens */
            }

            .header_calendar h5 {
                font-size: 3    vw; /* Further adjust font size for smaller screens */
            }
        }

        @media (max-width: 767px) {
            .container_calendar {
                margin: 5% 2%;
            max-width: 100%; /* Ajusta el ancho máximo para que ocupe todo el ancho en dispositivos móviles */
            width: 90%; /* Ancho ligeramente reducido en dispositivos móviles */
        }
    }



    </style>


    <div class="container">
        <div class="container_calendar">
            <div class="header_calendar">
                <h1 id="text_day">00</h1>
                <h5 id="text_month">null</h5>
            </div>
            <div class="body_calendar">
                <div class="container_details">
                    <div class="detail_1">
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="detail_2">
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_change_month">
                    <button id="last_month">&lt;</button>
                    <div>
                        <span id="text_month_02">null</span>
                        <span id="text_year">0000</span>
                    </div>
                    <button id="next_month">&gt;</button>
                </div>
                <div class="container_weedays">
                    <span class="week_days_item">SUN</span>
                    <span class="week_days_item">MON</span>
                    <span class="week_days_item">TUE</span>
                    <span class="week_days_item">WED</span>
                    <span class="week_days_item">THU</span>
                    <span class="week_days_item">FRI</span>
                    <span class="week_days_item">SAT</span>
                </div>
                <div class="container_days">
                    <span class="week_days_item item_day"></span>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/controllers/calendario_script.js"></script>
        <script>
            var monthName = ["January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"
            ];

            var now = new Date();
            var day = now.getDate();
            var month = now.getMonth();
            var currentMonth = month;
            var year = now.getFullYear();

            initCalender();
            console.log(startDay());

            function initCalender() {
                $("#text_day").text(day);
                $("#text_month").text(monthName[currentMonth]);

                $("#text_month_02").text(monthName[month]);
                $("#text_year").text(year);

                $(".item_day").remove();

                for (let i = startDay(); i > 0; i--) {
                    $(".container_days").append(
                        `<span class="week_days_item item_day prev_days">${getTotalDays(month - 1) - (i - 1)}</span>`);
                }

                for (let i = 1; i <= getTotalDays(month); i++) {
                    if (i == day && month == currentMonth) {
                        $(".container_days").append(`<span class="week_days_item item_day today">${i}</span>`);
                    } else {
                        $(".container_days").append(`<span class="week_days_item item_day">${i}</span>`);
                    }
                }
            }

            function getNextMonth() {
                if (month !== 11) {
                    month++;
                } else {
                    year++;
                    month = 0;
                }
                initCalender();
            }

            function getPrevMonth() {
                if (month !== 0) {
                    month--;
                } else {
                    year--;
                    month = 11;
                }
                initCalender();
            }

            function startDay() {
                var start = new Date(year, month, 1);
                return ((start.getDate() - 1) === -1) ? 6 : start.getDay();
            }

            function leapMonth() {
                return ((year % 400 === 0) || (year % 4 === 0) && (year % 100 !== 0));
            }

            function getTotalDays() {
                if (month === -1) month = 11;
                var numMonthReal = month + 1;

                if (numMonthReal == 3 || numMonthReal == 5 || numMonthReal == 8 || numMonthReal == 10) {
                    return 31;
                } else if (numMonthReal == 0 || numMonthReal == 2 || numMonthReal == 4 || numMonthReal == 6 ||
                    numMonthReal == 7 || numMonthReal == 9 || numMonthReal == 10) {
                    return 30;
                } else {
                    return leapMonth() ? 29 : 28;
                }
            }

            $("#next_month").click(function () {
                getNextMonth();
            });

            $("#last_month").click(function () {
                getPrevMonth();
            })


        </script>
    </div>

    <div class="container">
        <button class="btn" style="background-color: #6bc72a; border-color: #6bc72a; color: white;"
            onclick="window.location.href='{{ url('/Events') }}'">
            <i class="fas fa-calendar"></i> Return to the events
        </button>
    </div>


</x-body>
