$(document).ready(function(){
    $('.carousel').carousel({fullWidth: true});
    
    $('#cardOne').click(function (e) {
        $('.carousel').carousel('next'); 
        e.preventDefault();
    });

    $('#cardTwo').click(function (e) {
        $('.carousel').carousel('next'); 
        e.preventDefault();
    });

    $('#cardThree').click(function (e) {
        $('.carousel').carousel('next'); 
        e.preventDefault();
    });

    $('#cardFour').click(function (e) {
        $('.carousel').carousel('next'); 
        e.preventDefault();
    });

    setInterval(() => {
        $('.carousel').carousel('next');
    }, 4000);
  });