<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Force Logout Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
    <!-- Halaman konten -->
    <h1>Dashboard</h1>
    <button onclick="triggerForceLogout()">Trigger Force Logout</button>

    <script>
        // Fungsi untuk memanggil pop-up force logout
        function triggerForceLogout() {
            Swal.fire({
                title: 'Masukkan Password',
                input: 'password',
                inputAttributes: {
                    autofocus: true
                },
                showCancelButton: true,
                confirmButtonText: 'Submit',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    const password = result.value;

                    // Kirim permintaan ke backend untuk memverifikasi password
                    fetch('/force-logout', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                password: password
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Jika verifikasi berhasil, logout user
                                window.location.href = '{{ route('logout') }}';
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Password salah!'
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        }

        // Cek apakah user mengunjungi URL tertentu (misalnya force-logout)
        if (window.location.pathname === '/forceLogout') {
            triggerForceLogout(); // Memunculkan pop-up saat URL sesuai
        }
    </script>
</body>

</html>
