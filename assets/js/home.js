/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $("body").on("pagecontainerbeforetransition", function (event, ui) {
        var nwPage = ui.toPage[0];
        var nwObj = window[$(nwPage).attr('id')];
        nwObj && nwObj.beforeLoad && nwObj.beforeLoad();
    });
    $("body").on("pagecontainerchange", function (event, ui) {
        var nwPage = ui.toPage[0];
        var nwObj = window[$(nwPage).attr('id')];
        nwObj && nwObj.afterLoad && nwObj.afterLoad();
    });
});