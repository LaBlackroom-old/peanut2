// ü
var facebook = {
  //---------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  page : function(display){
    $('.sf_admin_form_field_facebook_page').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  likeDisplay : function(display){
    $('.sf_admin_form_field_facebook_like_send_button').css('display', display);
    $('.sf_admin_form_field_facebook_like_layout_style').css('display', display);
    $('.sf_admin_form_field_facebook_like_width').css('display', display);
    $('.sf_admin_form_field_facebook_like_show_face').css('display', display);
    $('.sf_admin_form_field_facebook_like_verb_to_display').css('display', display);
    $('.sf_admin_form_field_facebook_like_color_scheme').css('display', display);
    $('.sf_admin_form_field_facebook_like_font').css('display', display);   
  },
  //---------------------------------------------------------------------------------------------------------------
  openGraphDisplay : function(display){
    $('.sf_admin_form_field_facebook_title').css('display', display);
    $('.sf_admin_form_field_facebook_type').css('display', display);
    $('.sf_admin_form_field_facebook_url').css('display', display);
    $('.sf_admin_form_field_facebook_image').css('display', display);
    $('.sf_admin_form_field_facebook_sitename').css('display', display);
    $('.sf_admin_form_field_facebook_description').css('display', display);
  },
  
  //---------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  openGraph : function(valueText, valueInt){
    $('input#settings_facebook_title').val(valueText);
    $('select#settings_facebook_type').val(valueInt);
    $('input#settings_facebook_url').val(valueText);
    $('input#settings_facebook_image').val(valueText);
    $('input#settings_facebook_sitename').val(valueText);
    $('input#settings_facebook_description').val(valueText);
  },
  //---------------------------------------------------------------------------------------------------------------
  like : function(valueText, valueInt){
    $('select#settings_facebook_like_send_button').val(valueInt);
    $('select#settings_facebook_like_layout_style').val(valueInt);
    $('input#settings_facebook_like_width').val(valueText);
    $('select#settings_facebook_like_show_face').val(valueInt);
    $('select#settings_facebook_like_verb_to_display').val(valueInt);
    $('select#settings_facebook_like_color_scheme').val(valueInt);
    $('input#settings_facebook_like_font').val(valueText);
  },
  //---------------------------------------------------------------------------------------------------------------
  pageUrl : function(value){
    $('input#settings_facebook_page').val(value);
  },
  //---------------------------------------------------------------------------------------------------------------
  likeDisabled : function(attr, opacity, type){
    
    if(type == 1){
      /* On remet le champ a "Choisir" */
      $('select#settings_facebook_like').val(0);
      
      /* On cache les sous-champs */
      facebook.openGraphDisplay('none');
    }
    
    /* on desactive le SELECT */
    $('select#settings_facebook_like').attr('disabled', attr);
    $('select#settings_facebook_like').css({
      'opacity' : opacity, 
      '-moz-opacity' : opacity,
      '-ms-filter' : 'alpha(opacity='+opacity*100+')', 
      'filter' : 'alpha(opacity='+opacity*100+')'
    });
  },
  
  
  //---------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  current : function(){
    facebook.currentFacebookRequest();
    facebook.currentFacebookLike();
    facebook.currentFacebookShare();
  },
  //---------------------------------------------------------------------------------------------------------------
  currentFacebookRequest : function(){
    if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
      facebook.page('block');
      //facebook.likeDisabled('disabled', '0.5', 1)
    }
    else { /* CHOISIR OR NO */
      facebook.page('none');
      facebook.pageUrl('');
      //facebook.likeDisabled('', '1.0', 0)
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentFacebookLike : function(){
    if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
      facebook.likeDisplay('block');
    }
    else{ /* CHOISIR  OR NO */
      facebook.likeDisplay('none');
      facebook.like("", 0);
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentFacebookShare : function(){
    if( '1' == $('select#settings_facebook_share').val() ){ /* YES */
      facebook.openGraphDisplay('block');
    }
    else{ /* CHOISIR  OR NO */
      facebook.openGraphDisplay('none');
      facebook.openGraph("", 0);
    }
  },
  
  //---------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  change : function(){
    facebook.changeFacebookRequest();
    facebook.changeFacebookLike();
    facebook.changeFacebookShare();
  },
  //---------------------------------------------------------------------------------------------------------------
  changeFacebookRequest : function(){
    
    $('select#settings_facebook_request').change(function() {
      if( '1' == $('select#settings_facebook_request').val() ){ /* YES */
        facebook.page('block');
        //facebook.likeDisabled('disabled', '0.5', 1)
      }
      else { /* CHOISIR OR NO */
        facebook.page('none');
        facebook.pageUrl('');
        //facebook.likeDisabled('', '1.0', 0)
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeFacebookLike : function(){
    
    $('select#settings_facebook_like').change(function() {
      if( '1' == $('select#settings_facebook_like').val() ){ /* YES */
        facebook.likeDisplay('block');
      }
      else{ /* CHOISIR  OR NO */ 
        facebook.likeDisplay('none');
        facebook.like("", 0);
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeFacebookShare : function(){
    
    $('select#settings_facebook_share').change(function() {
      if( '1' == $('select#settings_facebook_share').val() ){ /* YES */
        facebook.openGraphDisplay('block');
      }
      else{ /* CHOISIR  OR NO */
        facebook.openGraphDisplay('none');
        facebook.openGraph("", 0);
      }
    });
  }
}


var twitter = {
  //---------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  follow_req : function(display){
    $('.sf_admin_form_field_twitter_follow_request').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  account : function(display){
    $('.sf_admin_form_field_twitter_account').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  follow : function(display){
    $('.sf_admin_form_field_twitter_data_show_screen_name').css('display', display);
    $('.sf_admin_form_field_twitter_data_show_count').css('display', display);
    $('.sf_admin_form_field_twitter_follow_data_size').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  tweet_req : function(display){
    $('.sf_admin_form_field_twitter_tweet_request').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  tweet : function(display){
    $('.sf_admin_form_field_twitter_tweet_url_request').css('display', display);
    $('.sf_admin_form_field_twitter_tweet_text_request').css('display', display);
    $('.sf_admin_form_field_twitter_show_count').css('display', display);
    $('.sf_admin_form_field_twitter_tweet_data_size').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  tweet_url_request : function(display){
    $('.sf_admin_form_field_twitter_tweet_url').css('display', display);
  },  
  //---------------------------------------------------------------------------------------------------------------
  tweet_text_request : function(display){
    $('.sf_admin_form_field_twitter_tweet_text').css('display', display);
  },
  
  //---------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  select_all : function(value){
    twitter.select_twitter_follow_request(value);
    twitter.select_twitter_follow(value);
    twitter.select_twitter_tweet_request(value);
    twitter.select_twitter_tweet(value);
    twitter.select_twitter_tweet_url_request(value);
    twitter.select_twitter_tweet_text_request(value);
  },
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_follow_request : function(value){$('select#settings_twitter_follow_request').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_follow : function(value){
    $('select#settings_twitter_data_show_screen_name').val(value);
    $('select#settings_twitter_data_show_count').val(value);
    $('select#settings_twitter_follow_data_size').val(value);
  },
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_tweet_request : function(value){$('select#settings_twitter_tweet_request').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_tweet : function(value){
    $('select#settings_twitter_show_count').val(value);
    $('select#settings_twitter_tweet_data_size').val(value);
  },
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_tweet_url_request : function(value){$('select#settings_twitter_tweet_url_request').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  select_twitter_tweet_text_request : function(value){$('select#settings_twitter_tweet_text_request').val(value);},
  
  //---------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  current : function(){
    twitter.currentAccount(); 
    twitter.currentTwitterReq(); 
      twitter.currentTwitterFollowReq();
      twitter.currentTwitterTweetReq();
        twitter.currentTwitterTweetUrl();
        twitter.currentTwitterTweetText();
  },
  //---------------------------------------------------------------------------------------------------------------
  currentTwitterReq : function(){
    if( '1' == $('select#settings_twitter_request').val() ){ /* YES */
        twitter.account('block');twitter.follow_req('block');twitter.tweet_req('block');
    }
    else{ /* CHOISIR OR NO */
      
      /* On cache les champs account, follow & tweet */
      twitter.account('none');twitter.follow_req('none');twitter.tweet_req('none'); 
      
      /* On cache aussi les sous-champs de chacun des champs */
      twitter.follow('none');twitter.tweet_url_request('none');
      twitter.tweet('none');twitter.tweet_text_request('none');
      
      twitter.select_all(0);
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentTwitterFollowReq : function(){
    if( '1' == $('select#settings_twitter_follow_request').val() ){ /* YES */
      twitter.follow('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.follow('none');
      twitter.select_twitter_follow(0);
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentTwitterTweetReq : function(){
    if( '1' == $('select#settings_twitter_tweet_request').val() ){ /* YES */
      twitter.tweet('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet('none');
      twitter.select_twitter_tweet(0);
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentTwitterTweetUrl : function(){
    if( '1' == $('select#settings_twitter_tweet_url_request').val() ){ /* YES */
      twitter.tweet_url_request('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet_url_request('none');
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentTwitterTweetText : function(){
    if( '1' == $('select#settings_twitter_tweet_text_request').val() ){ /* YES */
      twitter.tweet_text_request('block');
    }
    else{ /* CHOISIR OR NO */
      twitter.tweet_text_request('none');
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentAccount : function(){
    if( "" == $('input#settings_twitter_account').val() ){
      $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').attr('disabled', 'disabled');
      $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').css({
        'opacity' : '0.5', 
        '-moz-opacity' : '0.5',
        '-ms-filter' : 'alpha(opacity=50)', 
        'filter' : 'alpha(opacity=50)'
      });
    }
  },
  
  //---------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  change : function(){
    twitter.changeAccount();
    twitter.changeTwitterReq();
      twitter.changeTwitterFollowReq();
      twitter.changeTwitterTweetReq();
        twitter.changeTwitterTweetUrl();
        twitter.changeTwitterTweetText();
  },
  //---------------------------------------------------------------------------------------------------------------
  changeTwitterReq : function(){
    $('select#settings_twitter_request').change(function() {
      if( '1' == $('select#settings_twitter_request').val() ){ /* YES */
        twitter.account('block');twitter.follow_req('block');twitter.tweet_req('block');
      }
      else{ /* CHOISIR OR NO */
        /* On cache les champs account, follow & tweet */
        twitter.account('none');twitter.follow_req('none');twitter.tweet_req('none'); 

        /* On cache aussi les sous-champs de chacun des champs */
        twitter.follow('none');twitter.tweet_url_request('none');
        twitter.tweet('none');twitter.tweet_text_request('none');
        
        twitter.select_all(0);
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeTwitterFollowReq : function(){
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
  //---------------------------------------------------------------------------------------------------------------
  changeTwitterTweetReq : function(){
    $('select#settings_twitter_tweet_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_request').val() ){ /* YES */
      twitter.tweet('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet('none');
        twitter.select_twitter_tweet(0);
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeTwitterTweetUrl : function(){
    $('select#settings_twitter_tweet_url_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_url_request').val() ){ /* YES */
      twitter.tweet_url_request('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet_url_request('none');
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeTwitterTweetText : function(){
    $('select#settings_twitter_tweet_text_request').change(function() {
      if( '1' == $('select#settings_twitter_tweet_text_request').val() ){ /* YES */
      twitter.tweet_text_request('block');
      }
      else{ /* CHOISIR OR NO */
        twitter.tweet_text_request('none');
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeAccount : function(){
    $('input#settings_twitter_account').live('keyup',function(){
      if(this.value.length > 0){
        $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').attr('disabled', '');
        $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').css({
          'opacity' : '1.0', 
          '-moz-opacity' : '1.0',
          '-ms-filter' : 'alpha(opacity=100)', 
          'filter' : 'alpha(opacity=100)'
      });
      }
      else{
        $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').attr('disabled', 'disabled');
        $('select#settings_twitter_tweet_request, select#settings_twitter_follow_request').css({
          'opacity' : '0.5', 
          '-moz-opacity' : '0.5',
          '-ms-filter' : 'alpha(opacity=50)', 
          'filter' : 'alpha(opacity=50)'
        });
        
        /* On remet les valeurs des SELECT à "Choisir" */
        $('select#settings_twitter_follow_request, select#settings_twitter_tweet_request').val(0);
        
        /* On cache les sous-champs des SELECT */
        twitter.follow('none');
        twitter.tweet('none');
        twitter.tweet_url_request('none');
        twitter.tweet_text_request('none');
        twitter.select_all(0);
      }
    });
  }
  //---------------------------------------------------------------------------------------------------------------
}

var google = {
  //---------------------------------------------------------------------------------------------------------------
  // CSS FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  pageLink : function(display){
    $('.sf_admin_form_field_google_page_link').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  plus : function(display){
    $('.sf_admin_form_field_google_plus_size').css('display', display);
    $('.sf_admin_form_field_google_plus_note').css('display', display);
    $('.sf_admin_form_field_google_plus_url').css('display', display);
    $('.sf_admin_form_field_google_plus_type').css('display', display);
    $('.sf_admin_form_field_google_plus_title').css('display', display);
    $('.sf_admin_form_field_google_plus_url_image').css('display', display);
    $('.sf_admin_form_field_google_plus_description').css('display', display);
  },
  //---------------------------------------------------------------------------------------------------------------
  otherType : function(display){
    $('.google_plus_other_type').css('display', display);
  },

  //---------------------------------------------------------------------------------------------------------------
  // VALUE SELECT FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  select_all : function(valueText, valueInt){
    google.select_google_plus_size(valueInt);
    google.select_google_plus_note(valueInt);
    google.input_google_plus_url(valueText);
    google.select_google_plus_type(valueInt);
    google.input_google_plus_other_type(valueText);
    google.input_google_plus_title(valueText);
    google.input_google_plus_url_image(valueText);
    google.textarea_google_plus_description(valueText);
  },
  //---------------------------------------------------------------------------------------------------------------
  select_google_plus_size : function(value){$('select#settings_google_plus_size').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  select_google_plus_note : function(value){$('select#settings_google_plus_note').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  input_google_plus_url : function(value){$('input#settings_google_plus_url').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  select_google_plus_type : function(value){$('select#settings_google_plus_type').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  input_google_plus_other_type : function(value){$('input#settings_google_plus_other_type').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  input_google_plus_title : function(value){$('input#settings_google_plus_title').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  input_google_plus_url_image : function(value){$('input#settings_google_plus_url_image').val(value);},
  //---------------------------------------------------------------------------------------------------------------
  textarea_google_plus_description : function(value){$('textarea#settings_google_plus_description').val(value);},
  
  //---------------------------------------------------------------------------------------------------------------
  // CURRENT ACTION FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  current : function(){
    google.currentGoogleReq();
    google.currentGooglePlusReq();
      google.currentGooglePlusOtherType();
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGoogleReq : function(){
    if( '1' == $('select#settings_google_request').val() ){ /* YES */
      google.pageLink('block');
    }
    else{ /* CHOISIR OR NO */
      google.pageLink('none');
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGooglePlusReq : function(){
    if( '1' == $('select#settings_google_plus_request').val() ){ /* YES */
      google.plus('block');
    }
    else{ /* CHOISIR OR NO */
      google.plus('none');
    }
  },
  //---------------------------------------------------------------------------------------------------------------
  currentGooglePlusOtherType : function(){
    if( '1' == $('select#settings_google_plus_type').val() ){ /* Autres */
      google.otherType('block');
    }
    else{ /* Tous sauf "Autres" */
      google.otherType('none');
    }
  },
  
  //---------------------------------------------------------------------------------------------------------------
  // CHANGE FUNCTION
  //---------------------------------------------------------------------------------------------------------------
  change : function(){
    google.changeGoogleReq();
    google.changeGooglePlusReq();
    google.changeGooglePlusOtherType();
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGoogleReq : function(){
    $('select#settings_google_request').change(function() {
      if( '1' == $('select#settings_google_request').val() ){ /* YES */
        google.pageLink('block');
      }
      else{ /* CHOISIR OR NO */
        google.pageLink('none');
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGooglePlusReq : function(){
    $('select#settings_google_plus_request').change(function() {
      if( '1' == $('select#settings_google_plus_request').val() ){ /* YES */
        google.plus('block');
      }
      else{ /* CHOISIR OR NO */
        google.plus('none');
        google.select_all("", 0);
      }
    });
  },
  //---------------------------------------------------------------------------------------------------------------
  changeGooglePlusOtherType : function(){
    $('select#settings_google_plus_type').change(function() {
      if( '1' == $('select#settings_google_plus_type').val() ){ /* Autres */
        google.otherType('block');
      }
      else{ /* Tous sauf "Autres" */
        google.otherType('none');
      }
    });
  }
  
}

