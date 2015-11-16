/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Flickr(){
    
}

Flickr.prototype = {
    beforeLoad : function(){
      //Appelé avant la transition  
    },
    afterLoad : function(){
        //Appelé après la transition
        console.log("flickr is loaded");
    }
};

window.flickr = new Flickr();