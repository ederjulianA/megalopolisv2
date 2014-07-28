$(document).on('ready', function() {

    preview_1();
    preview_2();
    preview_3();
    subcatEdit();
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