<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Sinema Bilet Rezervasyon</title>
</head>

<body>
  
<?php include("datayukle.php");   ?>

    <div class="container">
        <div class="screen"></div>
        <div class="row">
            <div class="seat">0</div>
            <div class="seat">1</div>
            <div class="seat ">2</div>
            <div class="seat ">3</div>
            <div class="seat">4</div>
            <div class="seat">5</div>
            <div class="seat">6</div>
            <div class="seat">7</div>
        </div>
        <div class="row">
            <div class="seat">8</div>
            <div class="seat">9</div>
            <div class="seat">10</div>
            <div class="seat">11</div>
            <div class="seat ">12</div>
            <div class="seat ">13</div>
            <div class="seat">14</div>
            <div class="seat">15</div>
        </div>
        <div class="row">
            <div class="seat">16</div>
            <div class="seat">17</div>
            <div class="seat">18</div>
            <div class="seat">19</div>
            <div class="seat">20</div>
            <div class="seat">21</div>
            <div class="seat">22</div>
            <div class="seat">23</div>
        </div>
        <div class="row">
            <div class="seat">24</div>
            <div class="seat">25</div>
            <div class="seat">26</div>
            <div class="seat">27</div>
            <div class="seat">28</div>
            <div class="seat">29</div>
            <div class="seat">30</div>
            <div class="seat">31</div>
        </div>
        <div class="row">
            <div class="seat">32</div>
            <div class="seat">33</div>
            <div class="seat">34</div>
            <div class="seat">35</div>
            <div class="seat">36</div>
            <div class="seat">37</div>
            <div class="seat">38</div>
            <div class="seat">39</div>
        </div>
    </div>

    <div class="movie-list">
        <select id="movie">
            <option disabled>Film Seçiniz</option>
            <option value="20">movie 1</option>
            <option value="22">movie 2</option>
            <option value="25">movie 3</option>
        </select>
    </div>

    <ul class="info">
        <li>
            <div class="seat selected"></div>
            <small>Seçili</small>
        </li>
        <li>
            <div class="seat"></div>
            <small>Boş</small>
        </li>
        <li>
            <div class="seat reserved"></div>
            <small>Dolu</small>
        </li>
    </ul>

    <p class="text">
        <span id="count">3</span> adet koltuk için hesaplanan ücret <span id="amount">60</span> TL.
    </p>
    <button id="kayit">Kaydet</button>
    <script>
        //localStorage.setItem('secilenlerhepsi', JSON.stringify(""));
        localStorage.clear();
    </script>

    <script src="script.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
    <script>


function BaslangicAyarlama2() {
 
 const selectedSeats2 = JSON.parse(localStorage.getItem('secilenlerhepsi'));

if (selectedSeats2 != null && selectedSeats2.length > 0) {
     const tumkoltuklar = container.querySelectorAll('.seat');
     tumkoltuklar.forEach(function(seat, index) {
         if (selectedSeats2.indexOf(index) > -1) {

             //seat.classList.add('selected');
             seat.className = "seat reserved";

         }
     });
 }

}
   // var myElement = document.getElementById("olddata").textContent;

    localStorage.setItem('secilenlerhepsi', JSON.stringify(spge));

     BaslangicAyarlama2() ;

   //alert(spge);
        $(document).ready(function() {
            $('#kayit').click(function() {

                // const selectedSeats2 = JSON.parse(localStorage.getItem('secilenlerhepsi'));

                const selectedSeats2 = localStorage.getItem('secilenlerhepsi');
                //alert(typeof(selectedSeats2));
                $.ajax({
                        type: 'POST',
                        url: 'datasave.php',
                        data: "deger=" + selectedSeats2,
                    })
                    .done(function(selectedSeats2) {

                       // alert(selectedSeats2);

                    })
                    .fail(function() {

                        // just in case posting your form failed


                    });

                // to prevent refreshing the whole page page
                return false;

            });
        });
    </script>




</body>

</html>