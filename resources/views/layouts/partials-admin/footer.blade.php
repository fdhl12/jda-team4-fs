<footer class="w-full text-right p-4 bg-white text-gray border-b border-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-700">
    &copy; @php echo date('Y') @endphp {{ $pengaturan['name'] }}
{{--    Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.--}}
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('contentStats').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Berita', 'Pengumuman', 'Galeri'],
                datasets: [{
                    label: 'Jumlah Konten',
                    data: [{{ $totalBerita }}, {{ $totalPengumuman }}, {{ $totalGaleri }}],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)', // blue-500
                        'rgba(16, 185, 129, 0.8)', // green-500
                        'rgba(249, 115, 22, 0.8)', // orange-500
                    ],
                    borderColor: [
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(249, 115, 22)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    });

    
    </script>
