const container = document.querySelector('.container');
const count = document.getElementById('count');
const amount = document.getElementById('amount');
const select = document.getElementById('movie');
const seats = document.querySelectorAll('.seat:not(.reserved)');
const kayit = document.getElementById('kayit');
BaslangicAyarlama();
getFromLocalStorage();
calculateTotal();

container.addEventListener('click', function(e) {
    if (e.target.classList.contains('seat') && !e.target.classList.contains('reserved')) {
        e.target.classList.toggle('selected');
        calculateTotal()
    }
});

select.addEventListener('change', function(e) {
    calculateTotal();
});

function calculateTotal() {
    const selectedSeats = container.querySelectorAll('.seat.selected');

    let secilenler = container.querySelectorAll('.seat.selected,.seat.reserved');
    const tumkoltuklar = container.querySelectorAll('.seat');

    const secilenlerdizi = [];
    const tumkoltuklardizi = [];

    secilenler.forEach(function(seat) {
        secilenlerdizi.push(seat);
    });

    tumkoltuklar.forEach(function(seat) {
        tumkoltuklardizi.push(seat);
    });


    localStorage.setItem('oncesi', JSON.stringify(tumkoltuklar));
    localStorage.setItem('secilenler', JSON.stringify(secilenler));



    let secilenlerinindex = secilenlerdizi.map(function(seat) {
        return tumkoltuklardizi.indexOf(seat);
    });



    localStorage.setItem('secilenlerhepsi', JSON.stringify(secilenlerinindex));






    const selectedSeatsArr = [];
    const seatsArr = [];

    selectedSeats.forEach(function(seat) {
        selectedSeatsArr.push(seat);
    });

    seats.forEach(function(seat) {
        seatsArr.push(seat);
    });

    // [1,3,5]
    let selectedSeatIndexs = selectedSeatsArr.map(function(seat) {
        return seatsArr.indexOf(seat);
    });

    let selectedSeatCount = selectedSeats.length;
    count.innerText = selectedSeatCount;
    amount.innerText = selectedSeatCount * select.value;

    saveToLocalStorage(selectedSeatIndexs);
}

function getFromLocalStorage() {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if (selectedSeats != null && selectedSeats.length > 0) {
        seats.forEach(function(seat, index) {
            if (selectedSeats.indexOf(index) > -1) {
                seat.classList.add('selected');
            }
        });
    }



    const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

    if (selectedMovieIndex != null) {
        select.selectedIndex = selectedMovieIndex;
    }
}

function saveToLocalStorage(indexs) {
    localStorage.setItem('selectedSeats', JSON.stringify(indexs));
    localStorage.setItem('selectedMovieIndex', select.selectedIndex);
}



kayit.addEventListener('click', function(e) {
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


});


function BaslangicAyarlama() {

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