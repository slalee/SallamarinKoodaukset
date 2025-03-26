

  $(document).ready(function() {
    $('.change-color').click(function() {
        $(this).css('background-color', 'lightskyblue'); // Laatikoiden taustaväri muuttuu klikatessa
    });
});  
$(document).ready(function() {
    $('#submit-guess').click(function() { //Oikeat vastaukset
        var correctAnswers = ["alankomaat", "bulgaria", "chile", "intia", "itävalta", "jamaika", "japani", "kreikka", "latvia", "meksiko"];
        var correctCount = 0;

        $('.boxi').each(function(index) {
            var answer = $(this).val().toLowerCase(); //Hyväksyy pienet ja isot alkukirjaimet
            if (answer === correctAnswers[index]) { // Vertailee pieniksi muunnettuja vastauksia
                correctCount++;
            }
        });

        $('#tulokset p').text(" Onnittelut 🎉\n  Oikeat vastaukset: " + correctCount + " / " + correctAnswers.length);
        $('#tulokset').show();
    });
});

$(document).ready(function() {
    $('.palkki1 h1').css('margin-left', '-100%'); // Alussa otsikko on vasemmassa sivussa

    // Siirtyy keskelle sivua
    $('.palkki1 h1').animate({ 'margin-left': '1%' }, 2000);
});