// ü

var voc ={
  NoFacebookLike: "Il est dommage de ne pas profiter de ce que pourrais vous apporter la fonction Like de Facebook."
}


var base = {
  
  
  //---------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  openGraphSelect : function(value){
    $('select#settings_facebook_like').val(value);
  },
  //---------------------------------------------------------------------------------------------------------------
  openGraph : function(display){
    $('.sf_admin_form_field_facebook_title').css('display', display);
    $('.sf_admin_form_field_facebook_type').css('display', display);
    $('.sf_admin_form_field_facebook_url').css('display', display);
    $('.sf_admin_form_field_facebook_image').css('display', display);
    $('.sf_admin_form_field_facebook_sitename').css('display', display);
    $('.sf_admin_form_field_facebook_description').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  page : function(display){
    $('.sf_admin_form_field_facebook_page').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  like : function(display){
    $('.sf_admin_form_field_facebook_like').css('display', display); 
  },
  
  
  
  //---------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  currentFacebook : function(){
    
    //facebook_request
    if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
      base.page('block'); base.like('none');
    }
    else if( '2' == $('select#settings_facebook_request').val() ){ /* NO */
      base.page('none'); base.like('block');
    }
    else{ /* CHOISIR */
      base.page('none'); base.like('none'); base.openGraph('none');
    }
    
    //facebook_like
    if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
      base.openGraph('block');
    }
    else if( '2' == $('select#settings_facebook_like').val() ){ /* NO */
      base.openGraph('none');
    }
    else{ /* CHOISIR */
      base.openGraph('none');
    }
      
  },
  
  currentTwitter : function(){
    
  },
  
  currentGoogle : function(){
    
  },
  
  
  
  //---------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  changeFacebookRequest : function(){
    
    $('select#settings_facebook_request').change(function() {
      if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
        base.page('block'); base.like('none');
      }
      else if( '2' == $('select#settings_facebook_request').val() ){ /* NO */
        base.page('none'); base.like('block');
      }
      else{ /* CHOISIR */
        base.page('none'); base.like('none'); base.openGraph('none');
      }
      base.openGraphSelect(0);
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeFacebookLike : function(){
    
    $('select#settings_facebook_like').change(function() {
      if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
        base.openGraph('block');
      }
      else if( '2' == $('select#settings_facebook_like').val() ){ /* NO */
        base.openGraph('none');
      }
      else{ /* CHOISIR */
        base.openGraph('none');
      }
    });
  }

}


    
    