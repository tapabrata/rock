/*--------------------------------------------------------------------------------------------------
*
*   behaviour of drop down menu on specified events
*
*/

$(document).ready(function(){    
    $('#brDropDownMenuButton').click(function(){
        $('#brDropDownMenuContainer').fadeToggle();
    });
    
    $('ul.brDropDownMenu > li > a').click(function(){
        $(this).parent().siblings().children('div.subMenuContainer').hide()
        $(this).siblings('div.subMenuContainer').fadeIn();
        $(this).parent().siblings().children('a.selected').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $('body').click(function() {
        $('#brDropDownMenuContainer').fadeOut();
    });

    $('#brDropDownMenuContainer').click(function(e) {
        e.stopPropagation();
    });
    $('#brDropDownMenuButton').click(function(e) {
        e.stopPropagation();
    });
});


/*--------------------------------------------------------------------------------------------------
*
*   behaviour of elements on specified events
*
*/

$(document).ready(function(){

    $('div.brSearchBar input[type="text"]').focus(function(){
        $('div.brSearchBar').css(
            'border-color', '#F58634'
        );
        if($(this).val()==''){
            $('div#brDomainSearchBarInfo').hide();
        }
    });
    $('div.brSearchBar input[type="text"]').blur(function(){
        $('div.brSearchBar').css(
            'border-color', '#999'
        );
        if($(this).val()==''){
            $('div#brDomainSearchBarInfo').show();
        }
    });
    
    $('#brToggleMiniCart').click(function(){
        $('#brMiniCart').fadeToggle();
        if($(this).html()=='(Show)')
            $(this).html('(Hide)');
        else
            $(this).html('(Show)');        
    });

});



