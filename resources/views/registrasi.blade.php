<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{ route('personals.store')}}" method="POST">
                    {{ csrf_field()}}
                    <h2>Registrasi</h2>
                    <div class="inputbox">
                        <ion-icon name="nama-outline"></ion-icon>
                        <input type="text" name="nama" value="{{ old('nama') }}" required>
                        <label for="name">Nama</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="{{ old('email') }}"required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="nomor-outline"></ion-icon>
                        <input type="tel" name="nomor_hp" value="{{ old('nomor_hp') }}"required>
                        <label for="phone_number">Nomor</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="negara-outline"></ion-icon>
                        <input type="text" name="negara" value="{{ old('negara') }}"required>
                        <label for="negara">Negara</label>
                    </div>
                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" value="{{ old('password') }}" required>
                    <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label>
                            <input type="checkbox">lihat password
                        </label>
                        <label>
                            <a href="#">Forgot Password?</a>
                        </label>
                    </div>
                    <button type="submit">Registrasi</button>
                    <div class="register">
                        <p>Sudah Punya Akun? <a href="/login">Login</a></p>
                    </div>
                </form>

            </div>

        </div>
    </section>
</body>
</html>