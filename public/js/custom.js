$(document).ready(function(){
$.fn.isOnScreen = function() {
    var win = $(window);
    var viewport = { 
        top: win.scrollTop(), 
        left: win.scrollLeft() 
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    console.log(this);
    console.log(win);
    console.log(viewport);
    console.log(bounds);
    console.log('bounds');
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom)); 
};

});
// $(document).ready(function(){
    
//     $.fn.isOnScreen = function() {
//         var win = $(window);
//         var viewport = { 
//             top: win.scrollTop(), 
//             left: win.scrollLeft() 
//         };
//         viewport.right = viewport.left + win.width();
//         viewport.bottom = viewport.top + win.height();
//         var bounds = this.offset();
//         bounds.right = bounds.left + this.outerWidth();
//         bounds.bottom = bounds.top + this.outerHeight();
//         return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom)); 
//     };

//     // $(".sticky-slide").sticky({ topSpacing: 10,bottomSpacing:65 });
// })

function pp(d) {
    console.log(d);
}

$(function(){
    
    var $processingLoad = false;

    /*** For Loading More Content ***/
    $(document).on('click','[data-request="load-moredata"]', function(e){
        e.stopImmediatePropagation();
        var $this              = $(this);
        var offset             = $this.data('offset');
        var limit              = $this.data('limit');
        var tobeloaded         = $this.data('totaldata');
        var loadedcount        = $this.data('loadedcount');
        var id                 = $this.data('id');
        var loader             = $this.data('loader');
        var url                = $this.data('url');
        var target             = $this.data('target');
        var modal              = $this.data('modalview');
        var modalid            = $this.data('modalid');
        var remove             = $this.data('remove');
        var type               = $this.data('type');
        var formId             = $this.data('form');
        var dateFrom           = $this[0].dataset.fromdate;
        var dateTo             = $this[0].dataset.todate;
        var modaltitle         = $this.data('modal-title');
        var token              = $('meta[name="csrf-token"]').attr('content');
        
        if(tobeloaded == 0)
        {
            $processingLoad = false;
            $(target).html('<li>No records found.</li>');
            return true;
        }
        if($processingLoad)
        {
            return true;
        }
        if(loadedcount >= tobeloaded)
        {
            $processingLoad = false;
            return true;
        }

        (offset == "0") ? $this.data('offset',"1") : '';
        
        var formElement = document.querySelector(formId);
        var $formdata = formElement ? new FormData(formElement) : new FormData();
        if($.trim($('#textSearch').val()))
        {
            $formdata.append('textsearch',$('#textSearch').val());
        }
        if($.trim($('#data-order').val()))
        {
            $formdata.append('dataOrder',$('#data-order').val());
        }
        if($.trim($('#data-status').val()))
        {
            $formdata.append('dataStatus',$('#data-status').val());
        }
        if($.trim(dateFrom))
        {
            $formdata.append('fromdate',dateFrom);
        }
        if($.trim(dateTo))
        {
            $formdata.append('todate',dateTo);
        }
        $formdata.append('id',id);
        $formdata.append('type',type);
        $formdata.append('_token',token);
        $formdata.append('offset',offset);
        $.ajax({
            url: url,
            type: 'POST',
            data: $formdata,
            contentType:false,
            processData:false,
            statusCode: {
                404: function() {
                  pp( "page not found" );
                },
                500: function() {
                  pp( "internal error" );
                }
            },
            beforeSend: function( jqXHR, settings, status ) {
                $processingLoad = true;
                if(modal == true)
                {
                    $(target).html('');
                    $('.modal-title').text(modaltitle);
                    $(modalid).modal('show');
                }
                if(loader)
                {
                    $(loader).show();
                }
                if(remove == true)
                {
                    $this.hide();
                }
            },
            success: function (o) {
                resp = $.parseJSON(o);
                $(target).append(resp.data).last();
                if(loader)
                {    
                    $(loader).hide();
                }
                $this.data('offset',(eval(offset)+eval(limit)));
                $this.data('loadedcount',(eval(loadedcount)+eval(limit)));
                $processingLoad = false;
                if($('.totalContentLength').length < 1)
                {
                    $(target).html('<li>No records found.</li>');
                }
            },
            error: function (data) {
                pp(data);
                if(loader)
                {    
                    $(loader).hide();
                }
            }
        })
    });
});