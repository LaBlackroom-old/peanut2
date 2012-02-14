// ü
var facebook = {
  //-------------------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  facebook_page : function(display){ $('.sf_admin_form_field_facebook_page').css('display', display); },
  //-------------------------------------------------------------------------------------------------------------------------
  facebook_like_request : function(display){
    $('.sf_admin_form_field_facebook_like_send_button').css('display', display);
    $('.sf_admin_form_field_facebook_like_layout_style').css('display', display);
    $('.sf_admin_form_field_facebook_like_width').css('display', display);
    $('.sf_admin_form_field_facebook_like_show_face').css('display', display);
    $('.sf_admin_form_field_facebook_like_verb_to_display').css('display', display);
    $('.sf_admin_form_field_facebook_like_color_scheme').css('display', display);
    $('.sf_admin_form_field_facebook_like_font').css('display', display);   
  },
  //-------------------------------------------------------------------------------------------------------------------------
  facebook_share_request : function(display){
    $('.sf_admin_form_field_facebook_title').css('display', display);
    $('.sf_admin_form_field_facebook_type').css('display', display);
    $('.sf_admin_form_field_facebook_url').css('display', display);
    $('.sf_admin_form_field_facebook_image').css('display', display);
    $('.sf_admin_form_field_facebook_sitename').css('display', display);
    $('.sf_admin_form_field_facebook_description').css('display', display);
  },
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  input_facebook_page : function(value){ $('input#settings_facebook_page').val(value); },
  //-------------------------------------------------------------------------------------------------------------------------
  selectInput_facebook_like_request : function(valueText, valueInt){
    $('select#settings_facebook_like_send_button').val(valueInt);
    $('select#settings_facebook_like_layout_style').val(valueInt);
    $('input#settings_facebook_like_width').val(valueText);
    $('select#settings_facebook_like_show_face').val(valueInt);
    $('select#settings_facebook_like_verb_to_display').val(valueInt);
    $('select#settings_facebook_like_color_scheme').val(valueInt);
    $('select#settings_facebook_like_font').val(valueInt);
  },
  //-------------------------------------------------------------------------------------------------------------------------
  selectInput_facebook_share_request : function(valueText, valueInt){
    $('input#settings_facebook_title').val(valueText);
    $('select#settings_facebook_type').val(valueInt);
    $('input#settings_facebook_url').val(valueText);
    $('input#settings_facebook_image').val(valueText);
    $('input#settings_facebook_sitename').val(valueText);
    $('input#settings_facebook_description').val(valueText);
  },
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  current : function(){
    facebook.currentFacebookRequest();
    facebook.currentFacebookLike();
    facebook.currentFacebookShare();
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentFacebookRequest : function(){
    if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
      facebook.facebook_page('block');
    }
    else { /* CHOISIR OR NO */
      facebook.facebook_page('none');
      facebook.input_facebook_page('');
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentFacebookLike : function(){
    if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
      facebook.facebook_like_request('block');
    }
    else{ /* CHOISIR  OR NO */
      facebook.facebook_like_request('none');
      facebook.selectInput_facebook_like_request("", 0);
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentFacebookShare : function(){
    if( '1' == $('select#settings_facebook_share').val() ){ /* YES */
      facebook.facebook_share_request('block');
    }
    else{ /* CHOISIR  OR NO */
      facebook.facebook_share_request('none');
      facebook.selectInput_facebook_share_request("", 0);
    }
  },
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  change : function(){
    facebook.changeFacebookAccountRequest();
    facebook.changeFacebookLike();
    facebook.changeFacebookShare();
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeFacebookAccountRequest : function(){
    
    $('select#settings_facebook_request').change(function() {
      if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
        facebook.facebook_page('block');
      }
      else { /* CHOISIR OR NO */
        facebook.facebook_page('none');
        facebook.input_facebook_page('');
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeFacebookLike : function(){
    
    $('select#settings_facebook_like').change(function() {
      if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
        facebook.facebook_like_request('block');
      }
      else{ /* CHOISIR  OR NO */ 
        facebook.facebook_like_request('none');
        facebook.selectInput_facebook_like_request("", 0);
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeFacebookShare : function(){
    
    $('select#settings_facebook_share').change(function() {
      if( '1' == $('select#settings_facebook_share').val() ){ /* YES */
        facebook.facebook_share_request('block');
      }
      else{ /* CHOISIR  OR NO */
        facebook.facebook_share_request('none');
        facebook.selectInput_facebook_share_request("", 0);
      }
    });
  }
}


//###########################################################################################################################
//###########################################################################################################################
//###########################################################################################################################


var twitter = {
  //-------------------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  account : function(display){ $('.sf_admin_form_field_twitter_account').css('display', display); },
  //-------------------------------------------------------------------------------------------------------------------------
  follow_request : function(display){ $('.sf_admin_form_field_twitter_follow_request').css('display', display); },
  //-------------------------------------------------------------------------------------------------------------------------
      follow : function(display){
        $('.sf_admin_form_field_twitter_data_show_screen_name').css('display', display);
        $('.sf_admin_form_field_twitter_data_show_count').css('display', display);
        $('.sf_admin_form_field_twitter_follow_data_size').css('display', display);
        $('.sf_admin_form_field_twitter_follow_lang').css('display', display);
      },
  //-------------------------------------------------------------------------------------------------------------------------
  tweet_request : function(display){ $('.sf_admin_form_field_twitter_tweet_request').css('display', display); },
  //-------------------------------------------------------------------------------------------------------------------------
      tweet : function(display){
        $('.sf_admin_form_field_twitter_tweet_url_request').css('display', display);
        $('.sf_admin_form_field_twitter_tweet_text_request').css('display', display);
        $('.sf_admin_form_field_twitter_show_count').css('display', display);
        $('.sf_admin_form_field_twitter_tweet_data_size').css('display', display);
        $('.sf_admin_form_field_twitter_tweet_lang').css('display', display);
        $('.sf_admin_form_field_twitter_tweet_recommended').css('display', display);
        $('.sf_admin_form_field_twitter_tweet_hashtag').css('display', display);
      },
  //-------------------------------------------------------------------------------------------------------------------------
          tweet_url_request : function(display){ $('.sf_admin_form_field_twitter_tweet_url').css('display', display); },
  //---------------------------------------------------------------------------------------------------------------
          tweet_text_request : function(display){ $('.sf_admin_form_field_twitter_tweet_text').css('display', display); },
  //-------------------------------------------------------------------------------------------------------------------------
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  input_twitter_account : function(value){$('input#settings_twitter_account').val(value);},
  //-------------------------------------------------------------------------------------------------------------------------
  select_twitter_follow_request : function(value){$('select#settings_twitter_follow_request').val(value);},
  //-------------------------------------------------------------------------------------------------------------------------
      select_twitter_follow : function(value){
        $('select#settings_twitter_data_show_screen_name').val(value);
        $('select#settings_twitter_data_show_count').val(value);
        $('select#settings_twitter_follow_data_size').val(value);
        $('select#settings_twitter_follow_lang').val(value);
      },
  //-------------------------------------------------------------------------------------------------------------------------
  select_twitter_tweet_request : function(value){$('select#settings_twitter_tweet_request').val(value);},
  //-------------------------------------------------------------------------------------------------------------------------
      selectInput_twitter_tweet : function(valueText, valueInt){
        $('select#settings_twitter_tweet_url_request').val(valueInt);
        $('select#settings_twitter_tweet_text_request').val(valueInt);
        $('select#settings_twitter_show_count').val(valueInt);
        $('select#settings_twitter_tweet_data_size').val(valueInt);
        $('select#settings_twitter_tweet_lang').val(valueInt);
        $('input#settings_twitter_tweet_recommended').val(valueText);
        $('input#settings_twitter_tweet_hashtag').val(valueText);
      },
  //-------------------------------------------------------------------------------------------------------------------------
          input_twitter_tweet_url : function(value){$('input#settings_twitter_tweet_url').val(value);},
  //-------------------------------------------------------------------------------------------------------------------------
          input_twitter_tweet_text : function(value){$('input#settings_twitter_tweet_text').val(value);},
  //-------------------------------------------------------------------------------------------------------------------------
  disabled: function(){
    $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').attr('disabled', 'disabled');
    $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').css({
      'opacity' : '0.5', 
      '-moz-opacity' : '0.5',
      '-ms-filter' : 'alpha(opacity=50)', 
      'filter' : 'alpha(opacity=50)'
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  enabled: function(){
    $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').attr('disabled', '');
    $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').css({
      'opacity' : '1.0', 
      '-moz-opacity' : '1.0',
      '-ms-filter' : 'alpha(opacity=100)', 
      'filter' : 'alpha(opacity=100)'
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  current : function(){
    twitter.currentAccount(); 
    twitter.currentTwitterRequest(); 
      twitter.currentTwitterFollowRequest();
      twitter.currentTwitterTweetRequest();
        twitter.currentTwitterTweetUrlRequest();
        twitter.currentTwitterTweetTextRequest();
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentTwitterRequest : function(){
    if( '1' == $('select#settings_twitter_request').val() ){ /* YES */
      twitter.account('block');
      twitter.follow_request('block');
      twitter.tweet_request('block');
      
      /* Rend les champs disabled */        
      if($('input#settings_twitter_account').val() == 0){
        twitter.disabled();
      }
    }
    else{ /* CHOISIR OR NO */
      
      /* On cache les champs account, follow & tweet mais également chacun de leurs sous-champs (+réinitilisation des champs) */
      twitter.account('none'); 
      twitter.input_twitter_account("");

      twitter.follow_request('none'); 
      twitter.select_twitter_follow_request(0);

        twitter.follow('none'); 
        twitter.select_twitter_follow(0);

      twitter.tweet_request('none');
      twitter.select_twitter_tweet_request(0);

        twitter.tweet('none'); 
        twitter.selectInput_twitter_tweet("", 0);

          twitter.tweet_text_request('none');
          twitter.tweet_text_request('none');

          twitter.tweet_url_request('none');
          twitter.input_twitter_tweet_url("");
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentTwitterFollowRequest : function(){
    if( '1' == $('select#settings_twitter_follow_request').val() ){ /* YES */
      twitter.follow('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.follow('none');
      twitter.select_twitter_follow(0);
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentTwitterTweetRequest : function(){
    if( '1' == $('select#settings_twitter_tweet_request').val() ){ /* YES */
      twitter.tweet('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet('none');
      twitter.selectInput_twitter_tweet("", 0);
      twitter.input_twitter_tweet_url("");
      twitter.input_twitter_tweet_text("");
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentTwitterTweetUrlRequest : function(){
    if( '1' == $('select#settings_twitter_tweet_url_request').val() ){ /* YES */
      twitter.tweet_url_request('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet_url_request('none');
      twitter.input_twitter_tweet_url("");
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentTwitterTweetTextRequest : function(){
    if( '1' == $('select#settings_twitter_tweet_text_request').val() ){ /* YES */
      twitter.tweet_text_request('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet_text_request('none');
      twitter.input_twitter_tweet_text("");
    }
  },
  //-------------------------------------------------------------------------------------------------------------------------
  currentAccount : function(){
    if( "" == $('input#settings_twitter_account').val() ){
      twitter.disabled();
    }
  },
  
  //#########################################################################################################################
  
  //-------------------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //-------------------------------------------------------------------------------------------------------------------------
  change : function(){
    twitter.changeAccount();
    twitter.changeTwitterRequest();
      twitter.changeTwitterFollowRequest();
      twitter.changeTwitterTweetRequest();
        twitter.changeTwitterTweetUrlRequest();
        twitter.changeTwitterTweetTextRequest();
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeTwitterRequest : function(){
    $('select#settings_twitter_request').change(function() {
      
      if( '1' == $('select#settings_twitter_request').val() ){ /* YES */
        twitter.account('block');
        twitter.follow_request('block');
        twitter.tweet_request('block');
        
        /* Rend les champs disabled */        
        if($('input#settings_twitter_account').val() == 0){
          twitter.disabled();
        }
        
      }
      else{ /* CHOISIR OR NO */
        
        /* On cache les champs account, follow & tweet mais également chacun de leurs sous-champs (+réinitilisation des champs) */
        twitter.account('none'); 
        twitter.input_twitter_account("");
        
        twitter.follow_request('none'); 
        twitter.select_twitter_follow_request(0);
          
          twitter.follow('none'); 
          twitter.select_twitter_follow(0);

        twitter.tweet_request('none');
        twitter.select_twitter_tweet_request(0);
          
          twitter.tweet('none'); 
          twitter.selectInput_twitter_tweet("", 0);
            
            twitter.tweet_text_request('none');
            twitter.tweet_text_request('none');
            
            twitter.tweet_url_request('none');
            twitter.input_twitter_tweet_url("");
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeAccount : function(){
    $('input#settings_twitter_account').live('keyup',function(){
      if(this.value.length > 0){
        twitter.enabled();
      }
      else{
        twitter.disabled();
        
        /* On réinitialise les select/option */
        twitter.select_twitter_follow_request(0);
        twitter.select_twitter_tweet_request(0);
        
        /* On cache & réinitilise les sous-champs des select/option */
        twitter.follow('none');
        twitter.select_twitter_follow(0);
        
        twitter.tweet('none');
        twitter.selectInput_twitter_tweet("", 0);
        
          twitter.tweet_url_request('none');
          twitter.input_twitter_tweet_url("");
          
          twitter.tweet_text_request('none');
          twitter.input_twitter_tweet_text(""); 
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeTwitterFollowRequest : function(){
    $('select#settings_twitter_follow_request').change(function() {
      if( '1' == $('select#settings_twitter_follow_request').val() ){ /* YES */
        twitter.follow('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.follow('none');
        twitter.select_twitter_follow(0);
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeTwitterTweetRequest : function(){
    $('select#settings_twitter_tweet_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_request').val() ){ /* YES */
      twitter.tweet('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet('none');
        twitter.selectInput_twitter_tweet("", 0);
        twitter.input_twitter_tweet_url("");
        twitter.input_twitter_tweet_text("");
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeTwitterTweetUrlRequest : function(){
    $('select#settings_twitter_tweet_url_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_url_request').val() ){ /* YES */
      twitter.tweet_url_request('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet_url_request('none');
        twitter.input_twitter_tweet_url("");
      }
    });
  },
  //-------------------------------------------------------------------------------------------------------------------------
  changeTwitterTweetTextRequest : function(){
    $('select#settings_twitter_tweet_text_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_text_request').val() ){ /* YES */
      twitter.tweet_text_request('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet_text_request('none');
        twitter.input_twitter_tweet_text("");
      }
    });
  }
  //------------------------------------------------------------------------------------------------------------------------- 
}


//###########################################################################################################################
//###########################################################################################################################
//###########################################################################################################################


var google = {
  //-------------------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  google_page : function(display){ $('.sf_admin_form_field_google_page_link').css('display', display); },
  //---------------------------------------------------------------------------------------------------------------
  google_plus_request : function(display){
    $('.sf_admin_form_field_google_plus_size').css('display', display);
    $('.sf_admin_form_field_google_plus_note').css('display', display);
    $('.sf_admin_form_field_google_plus_url').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  google_plus_perso_request : function(display){
    $('.sf_admin_form_field_google_plus_type').css('display', display);
    $('.sf_admin_form_field_google_plus_title').css('display', display);
    $('.sf_admin_form_field_google_plus_url_image').css('display', display);
    $('.sf_admin_form_field_google_plus_description').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  google_other_type_request : function(display){
    $('.google_plus_other_type').css('display', display);
  },

  //###########################################################################################################################

  //---------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  input_google_page: function(value){$('input#settings_google_page_link').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  selectInput_google_plus : function(valueText, valueInt){
    $('select#settings_google_plus_size').val(valueInt);
    $('select#settings_google_plus_note').val(valueInt);
    $('input#settings_google_plus_url').val(valueText);
  },
  //-------------------------------------------------------------------------------------------------------------------------
  selectInput_google_plus_perso : function(valueText, valueInt){
    $('select#settings_google_plus_type').val(valueInt);
    $('input#settings_google_plus_title').val(valueText);
    $('input#settings_google_plus_url_image').val(valueText);
    $('textarea#settings_google_plus_description').val(valueText);
  },
  //---------------------------------------------------------------------------------------------------------------
  input_google_plus_other_type : function(value){$('input#settings_google_plus_other_type').val(value);},
  
  //###########################################################################################################################
  
  //---------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  current : function(){
    google.currentGoogleRequest();
    google.currentGooglePlusRequest();
    google.currentGooglePlusPersoRequest();
      google.currentGooglePlusOtherType();
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGoogleRequest : function(){
    if( '1' == $('select#settings_google_request').val() ){ /* YES */
      google.google_page('block');
    }
    else{ /* CHOISIR OR NO */
      google.google_page('none');
      google.input_google_page("");
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGooglePlusRequest : function(){
    if( '1' == $('select#settings_google_plus_request').val() ){ /* YES */
      google.google_plus_request('block');
    }
    else{ /* CHOISIR OR NO */
      google.google_plus_request('none');
      google.selectInput_google_plus("", 0);
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGooglePlusPersoRequest : function(){
    if( '1' == $('select#settings_google_plus_perso_request').val() ){ /* YES */
      google.google_plus_perso_request('block');
    }
    else{ /* CHOISIR OR NO */
      google.google_plus_perso_request('none');
      google.selectInput_google_plus_perso("", 0);
      
      google.google_other_type_request('none');
      google.input_google_plus_other_type("");
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGooglePlusOtherType : function(){
    if( '1' == $('select#settings_google_plus_type').val() ){ /* Autres */
      google.google_other_type_request('block');
    }
    else{ /* Tous sauf "Autres" */
      google.google_other_type_request('none');
      google.input_google_plus_other_type("");
    }
  },
  
  //###########################################################################################################################
  
  //---------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  change : function(){
    google.changeGoogleRequest();
    google.changeGooglePlusRequest();
    google.changeGooglePlusPersoRequest();
      google.changeGooglePlusOtherType();
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGoogleRequest : function(){
    $('select#settings_google_request').change(function() {
      if( '1' == $('select#settings_google_request').val() ){ /* YES */
        google.google_page('block');
      }
      else{ /* CHOISIR OR NO */
        google.google_page('none');
        google.input_google_page("");
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGooglePlusRequest : function(){
    $('select#settings_google_plus_request').change(function() {
      if( '1' == $('select#settings_google_plus_request').val() ){ /* YES */
        google.google_plus_request('block');
      }
      else{ /* CHOISIR OR NO */
        google.google_plus_request('none');
        google.selectInput_google_plus("", 0);
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGooglePlusPersoRequest : function(){
    $('select#settings_google_plus_perso_request').change(function() {      
      if( '1' == $('select#settings_google_plus_perso_request').val() ){ /* YES */
        google.google_plus_perso_request('block');        
      }
      else{ /* CHOISIR OR NO */
        google.google_plus_perso_request('none');
        google.selectInput_google_plus_perso("", 0);
        
        google.google_other_type_request('none');
        google.input_google_plus_other_type("");
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGooglePlusOtherType : function(){
    $('select#settings_google_plus_type').change(function() {
      if( '1' == $('select#settings_google_plus_type').val() ){ /* Autres */
        google.google_other_type_request('block');
      }
      else{ /* Tous sauf "Autres" */
        google.google_other_type_request('none');
        google.input_google_plus_other_type("");
      }
    });
  }
  
}