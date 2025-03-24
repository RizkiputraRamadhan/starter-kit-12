import './bootstrap';
import Chart from 'chart.js/auto';


$(document).ready(function() {
   
    var isFollowing = window.isFollowing;

    $('#followButton').click(function(e) {
        e.preventDefault();

        if (isFollowing) {
            console.log('%c⚠️ Kamu sudah mengikuti!', 'color: #fff; background: #f97316; padding: 6px 12px; border-radius: 4px; font-weight: bold;');
            return;
        }

        $.ajax({
            url: '/follow',
            method: 'POST',
            data: {
                _token: window.csrfToken
            },
            success: function(response) {
                if (response.success) {
                    $('#followersCount').text(response.total_followers);
                    isFollowing = true;
                    $('#followButton').addClass('bg-green-100 text-green-700').removeClass('bg-stone-100 text-gray-700');
                }
            },
            error: function() {
                console.log('%c❌ Gagal menyimpan, coba lagi!', 'color: #fff; background: #dc2626; padding: 6px 12px; border-radius: 4px; font-weight: bold;');
            }
        });
    });


    const ctx = document.getElementById('myChart')?.getContext('2d');
    if (ctx && window.chartData) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: window.chartData.labels,
                datasets: [{
                    label: 'Tren Visitor Tahun ' + new Date().getFullYear(),
                    data: window.chartData.counts,
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.1)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    tension: 0.4, 
                    pointRadius: 0 
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            color: '#2c2c2c'
                        },
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false 
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                }
            }
        });
    }
    

});
