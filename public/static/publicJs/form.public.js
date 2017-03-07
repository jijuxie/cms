/**
 * Created by qinxy on 2017/3/7.
 */
$(document).ready(function () {
    var select = $('select[data-select]');
    select.each(function () {
        $(this).children('option').each(function () {

            if( $(this).text()==$(this).parent('select').attr('data-select')){
                $(this).attr('selected','selected')
            }
        })
    })
})