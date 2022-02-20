<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{csrf}}" name="csrf-token" />
    <title>SLS - {% block title %}{% endblock %} </title>
    <!-- favicon
        ============================================ -->
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);

        body {
            font-family: 'Poppins', sans-serif;
            font-size: .8rem;
        }

        .notika-main-menu-dropdown a {
            cursor: pointer;
        }

        ul.notika-menu-wrap li a {
            font-size: 14px;
        }

        .dataTables_filter {
            float: right;
            margin-top: -2rem;
            margin-bottom: 2rem;
        }

        .paginate_button span {
            display: inline-block;
        }

        #data-table-basic_paginate {
            display: flex;
            justify-content: end;
            margin-top: -2rem;
        }

        .paginate_button {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #search_icon {
            position: fixed;
            z-index: 111;
            top: 50%;
            left: 40%;
            display: none;
        }

        .selectpicker {

            padding: .5rem;
            border-radius: 5px;
            color: black;
            border: none;
        }

        .selectpicker:focus {
            background-color: #fff;
            outline: none;
        }
    </style>
    {% block head %}
    {% endblock %}
</head>

<body style="background-color: #dde3de">
    {% include "components/dash/topbar.php" %}
    {% include "components/dash/nav.php" %}
    <img src="./search.gif" alt="" srcset="" id="search_icon">
    {% block content %}{% endblock %}
    <!-- End Status area-->
    <script src="assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <!-- jquery
        ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <!-- scrollUp JS
        ============================================ -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup/waypoints.min.js"></script>
    <script src="assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- sparkline JS
        ============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="assets/js/flot/jquery.flot.js"></script>
    <script src="assets/js/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/flot/curvedLines.js"></script>
    <script src="assets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="assets/js/knob/jquery.knob.js"></script>
    <script src="assets/js/knob/jquery.appear.js"></script>
    <script src="assets/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="assets/js/wave/waves.min.js"></script>
    <script src="assets/js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="assets/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="assets/js/chat/moment.min.js"></script>
    <script src="assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="assets/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>

    <script>
        const load = (path, callback = () => {}) => {
            $('#search_icon').show();
            let formData = new FormData();
            formData.append('csrf_token', document.getElementsByName("csrf-token")[0].content);
            fetch(`{{function.routePath('/')}}${path}`, {
                body: formData,
                method: "post"
            }).then(res => res.text()).then(data => {
                document.getElementById("appcontent").innerHTML = data;
                console.log(path);
                if (path == "dashboard") {
                    loadSparklineChart();
                } else if (path == "shippingstatus") {
                    const chart_data = $('#chartdata').text().split(",")
                    const chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        title: {
                            text: "Shipping Transaction Status"
                        },
                        data: [{
                            type: "pie",
                            startAngle: 240,
                            indexLabel: "{label} {y}",
                            dataPoints: [{
                                    y: chart_data[1],
                                    label: "Delivered"
                                },
                                {
                                    y: chart_data[2],
                                    label: "Cancel"
                                },
                                {
                                    y: chart_data[0],
                                    label: "Not Delivered"
                                }
                            ]
                        }]
                    });
                    chart.render();
                } else if (path != 'shippingstatus') {
                    $('#data-table-basic').DataTable();
                }
                $('#search_icon').hide();
                callback();
            });
        }
        const loadSparklineChart = () => {
            if ($('.sparkline-bar-stats1')[0]) {
                $('.sparkline-bar-stats1').sparkline('html', {
                    type: 'bar',
                    height: 36,
                    barWidth: 3,
                    barColor: '#00c292',
                    barSpacing: 2
                });
            }
            if ($('.sparkline-bar-stats2')[0]) {
                $('.sparkline-bar-stats2').sparkline('html', {
                    type: 'bar',
                    height: 36,
                    barWidth: 3,
                    barColor: '#fb9678',
                    barSpacing: 2
                });
            }
            if ($('.sparkline-bar-stats3')[0]) {
                $('.sparkline-bar-stats3').sparkline('html', {
                    type: 'bar',
                    height: 36,
                    barWidth: 3,
                    barColor: '#01c0c8',
                    barSpacing: 2
                });
            }
            if ($('.sparkline-bar-stats4')[0]) {
                $('.sparkline-bar-stats4').sparkline('html', {
                    type: 'bar',
                    height: 36,
                    barWidth: 3,
                    barColor: '#ab8ce4',
                    barSpacing: 2
                });
            }
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        }

        const submitForm = (form, path, section) => {
            const formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: `{{ function.routePath('/') }}${path}`,
                data: formData,
                processData: false,
                contentType: false,
                error: function(jqXHR, textStatus, errorMessage) {
                    console.log(errorMessage); // Optional
                },
                success: function(data) {
                    load(section, () => {
                        data = data.split(',');
                        $("#data-table-basic_wrapper").prepend(`
                                <div class="alert alert-${data[0]}" role="alert">
                                ${data[1]}
                            </div>`);

                        $(".alert").delay(4000).slideUp(200, function() {
                            $(this).alert('close');
                        });
                    });
                    $(".modal").modal('hide');
                }
            });

        }
    </script>
    {% block buttom %}
    {% endblock %}
</body>

</html>