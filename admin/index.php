<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../data/template/admin/head.php"; ?>
</head>
<body>

    <?php include_once "../data/template/admin/sidebar.php"; ?>

    <div class="content">
        <div class="content-head">
            <span onclick="menuControl('show')" class="iconify display-mobile" data-icon="eva:menu-fill" data-height="30"></span>
            <h1>Dashboard</h1>
        </div>
        <div class="col">
            <div class="row">
                <div class="box box-count-data">
                    <h3>RP 540.000</h3>
                    <h4>Jumlah Pendapatan</h4>
                    <h5 class="text-warning">RP 16.700 Jumlah Potongan</h5>
                </div>
                <div class="box box-count-data">
                    <p>20</p>
                    <h4>Kunjungan Website Hari Ini</h4>
                    <h5>12 November 2021</h5>
                </div>
                <div class="box box-count-data box-warning">
                    <p>4</p>
                    <h4>Pesanan Perlu Diproses</h4>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <p class="chart-title">Data Kunjungan</p>
                    <canvas id="visitorChart"></canvas>
                </div>
                <div class="box">
                    <p class="chart-title">Data Penjualan</p>
                    <canvas id="sellingChart"></canvas>
                </div>
            </div>
            <script>

            var xValues = [50,60,70,80,90,100,110,120,130,140];

            new Chart("visitorChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: '+Keranjang',
                        data: [160,170,170,190,200,270,400,500,600,700],
                        borderColor: "#f2f2f2",
                        backgroundColor: "#f2f2f2",
                        fill: false
                    },{
                        label: 'Jumlah Pengunjung',
                        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                        borderColor: "#f2f2f250",
                        backgroundColor: "#f2f2f2",
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false,
                            position: 'top'
                        },
                        title: {
                            display: false,
                        }
                    }
                }
            });
            new Chart("sellingChart", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: "Terjual",
                        data: [3,5,7,3,2,6,4,2,2,3],
                        backgroundColor: "#e46f0f",
                        fill: false
                    }]
                },
                options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                    title: {
                        display: false,
                    }
                }
            },
            });
            </script>
        </div>
    </div>

    <script>
        function menuControl(action) {
            if (action == 'show') {
                $('.sidebar').css('transform', 'translateX(0%)');
            } else if (action == 'close') {
                $('.sidebar').css('transform', 'translateX(-100%)');
            }
        }
    </script>

</body>
</html>