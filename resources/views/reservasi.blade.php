<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Study Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style4.css" />
</head>
<body>
<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li> 
                <li><a href="#contact">Contact</a></li>
            </ul>
            <h1 class="logo">Reservasi</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Reservasi Study Room</h1>
        </div>
    </section>

<form action="{{ route('booking.store2')}}" method="post">
  @csrf
  @method("POST")
  <div class="form-group">
    <h1 class="heading">Booking & contact</h1>
    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="nama">
      <label for="name">Nama</label>
    </div>
    <div class="controls">
      <input type="text" id="email" class="floatLabel" name="email">
      <label for="email">Email</label>
    </div>       
    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="nomor_hp">
      <label for="phone">Nomor HP</label>
    </div>
    <div class="controls">
      <input type="text" id="kota" class="floatLabel" name="kota" required>
      <label for="kota">Kota</label>
    </div>
    <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country" required>
        <label for="country">Negara</label> 
      </div>
  <div class="form-group">
    <h1 class="heading">Details</h1>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
         <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Tanggal Reservasi</label> <!--nanya -->
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" name="tipe_ruangan">
          <option value="blank" selected></option>
          <option value="regular">Regular</option>
          <option value="sedang">Sedang</option>
          <option value="vip">VIP</option>
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;Tipe Ruangan</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel" name="jangka_waktu">
        <option value="blank"selected></option>
        <option value="1">1 Jam</option>
        <option value="12">12 Jam</option>
        <option value="24">24 Jam</option>
      </select>
      <label for="fruit">Jangka Waktu</label>
     </div>     
    </div>      
     </div>
      <div class="grid">
        <p class="info-text"><br><br><br><br>Jika ada ingin di tambahkan bisa masukan ke bagian keterangan</p>
        <br>
        <div class="controls">
          <textarea name="keterangan" class="floatLabel" id="comments"></textarea>
          <label for="comments">Keterangan</label>
          </div>
            <button type="submit" value="Submit" class="col-1-4">Submit</button>
      </div>  
  </div> 
</form>
			<h1 class="display-5 w-50 mx-auto">Checkout</h1>
<div class="row g-5 mb-5">
					<table class="table">
						<thead class="bg-primary text-white">
							<tr class="text-center">
								<th>Nama</th>
								<th>Tipe Ruangan</th>
								<th>Jangka waktu</th>
								<th>Harga</th>
							</tr>
						</thead>
            @foreach ($data2 as $booking)
            <tr>
                <td>{{ $booking->nama }}</td>
                <td>{{ $booking->tipe_ruangan }}</td>
                <td>{{ $booking->jangka_waktu }}</td>
            </tr>
            @endforeach
					</table>
                </div>
            </div>
        </div>
        
        <div class="grid">
        <p class="info-text">
        <div class="controls">

          </div>
            <button type="submit" value="Submit" class="col-1-4">Bayar</button>
      </div> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">



