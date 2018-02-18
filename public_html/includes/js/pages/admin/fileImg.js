$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview2', function(){ 
    $('.image-preview2').popover('hide');
    // Hover befor close the preview
    $('.image-preview2').hover(
        function () {
           $('.image-preview2').popover('show');
        }, 
         function () {
           $('.image-preview2').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn2 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview2',
        style: 'font-size: initial;',
    });
    closebtn2.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview2').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn2)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview2-clear').click(function(){
        $('.image-preview2').attr("data-content","").popover('hide');
        $('.image-preview2-filename').val("");
        $('.image-preview2-clear').hide();
        $('.image-preview2-input input:file').val("");
        $(".image-preview2-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview2-input input:file").change(function (){     
        var img2 = $('<img/>', {
            id: 'dynamic2',
            width:250,
            height:200
        });      
        var file2 = this.files[0];
        var reader2 = new FileReader();
        // Set preview image into the popover data-content
        reader2.onload = function (m) {
            $(".image-preview2-input-title").text("Change");
            $(".image-preview2-clear").show();
            $(".image-preview2-filename").val(file2.name);            
            img2.attr('src', m.target.result);
            $(".image-preview2").attr("data-content",$(img2)[0].outerHTML).popover("show");
        }        
        reader2.readAsDataURL(file2);
    });  
});

$(document).on('click', '#close-preview3', function(){ 
    $('.image-preview3').popover('hide');
    // Hover befor close the preview
    $('.image-preview3').hover(
        function () {
           $('.image-preview3').popover('show');
        }, 
         function () {
           $('.image-preview3').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn3 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview3',
        style: 'font-size: initial;',
    });
    closebtn3.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview3').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn3)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview3-clear').click(function(){
        $('.image-preview3').attr("data-content","").popover('hide');
        $('.image-preview3-filename').val("");
        $('.image-preview3-clear').hide();
        $('.image-preview3-input input:file').val("");
        $(".image-preview3-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview3-input input:file").change(function (){     
        var img3 = $('<img/>', {
            id: 'dynamic3',
            width:250,
            height:200
        });      
        var file3 = this.files[0];
        var reader3 = new FileReader();
        // Set preview image into the popover data-content
        reader3.onload = function (d) {
            $(".image-preview3-input-title").text("Change");
            $(".image-preview3-clear").show();
            $(".image-preview3-filename").val(file3.name);            
            img3.attr('src', d.target.result);
            $(".image-preview3").attr("data-content",$(img3)[0].outerHTML).popover("show");
        }        
        reader3.readAsDataURL(file3);
    });  
});

$(document).on('click', '#close-preview0', function(){ 
    $('.image-preview0').popover('hide');
    // Hover befor close the preview
    $('.image-preview0').hover(
        function () {
           $('.image-preview0').popover('show');
        }, 
         function () {
           $('.image-preview0').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn0 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview0',
        style: 'font-size: initial;',
    });
    closebtn0.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview0').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn0)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview0-clear').click(function(){
        $('.image-preview0').attr("data-content","").popover('hide');
        $('.image-preview0-filename').val("");
        $('.image-preview0-clear').hide();
        $('.image-preview0-input input:file').val("");
        $(".image-preview0-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview0-input input:file").change(function (){     
        var img0 = $('<img/>', {
            id: 'dynamic0',
            width:250,
            height:200
        });      
        var file0 = this.files[0];
        var reader0 = new FileReader();
        // Set preview image into the popover data-content
        reader0.onload = function (d) {
            $(".image-preview0-input-title").text("Change");
            $(".image-preview0-clear").show();
            $(".image-preview0-filename").val(file0.name);            
            img0.attr('src', d.target.result);
            $(".image-preview0").attr("data-content",$(img0)[0].outerHTML).popover("show");
        }        
        reader0.readAsDataURL(file0);
    });  
});
