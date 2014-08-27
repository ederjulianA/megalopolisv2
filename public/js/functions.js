$(document).on('ready', function() {

    preview_1();
    preview_2();
    preview_3();
    subcatEdit();
    estadoEmpresa();
    $('#preview').hover(
        function() {
            $(this).find('a').fadeIn();
        }, function() {
            $(this).find('a').fadeOut();
        }
    )
    $('#file-select').on('click', function(e) {
         e.preventDefault();
        
        $('#filename').click();
    })

    $('input[type=file]').change(function() {
        var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview img').attr('src', e.target.result);
    	 }
         
         reader.readAsDataURL(this.files[0]);
    });

 
});

function estadoEmpresa()
{
    var est = $('#empresa_est').val();
    //alert(est);
    if(est == 0)
    {
        $('#wrapper').block({ 
                message: '<div class="message-block"><h1>Tu tienda está desactivada</h1> <p>Ponte en contacto con nosotros para solucionar este problema.</p><divclass="contacto-page-block">Telefonos:  <strong>6481166</strong> --- <strong>648369866</strong> <br>emails:  <strong>soporte@tumegalopolis.com</strong> --- <strong>megalopolis.web@gmail.com</strong> <br><br><a class="btn btn-primary" href="https://www.facebook.com/pages/TuMegalopolis/726858077327682" target="_blank">FB/TuMegalopolis</a> <a class="btn btn-info" href="https://twitter.com/tumegalopolis" target="_blank">@Tumegalopolis</a></div></div>' 
            }); 

       // $("#blockPage").addClass("overlayPage");
    }
}

function subcatEdit()
{
    var id_cat = $('#category').val();
        
}


   function preview_1()
{
    $('#imagen').change(function(){
            var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview1 img').attr('src', e.target.result);
         }
         
         reader.readAsDataURL(this.files[0]);

    });
}


function preview_3()
{
    $('#imagen3').change(function(){
            var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview3 img').attr('src', e.target.result);
         }
         
         reader.readAsDataURL(this.files[0]);

    });
}



function preview_2()
{
    $('#imagen2').change(function(){
            var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview2 img').attr('src', e.target.result);
         }
         
         reader.readAsDataURL(this.files[0]);

    });
}