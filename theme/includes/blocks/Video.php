<div class="video-container">
    <div class="overlay">
      <div class="loader"> <img src="/wp-content/uploads/2022/11/89.gif" alt=""></div>
    </div>
    <div class="video">
    <video class="desktop" autoplay playsinline muted loop>
            <source src="<?php echo $block['video']['url']?>" type="video/mp4">
    </video>
    <video class="tablet" autoplay playsinline muted loop>
            <source src="<?php echo $block['tablet_video']['url']?>" type="video/mp4">
    </video>
    <video class="mobile" autoplay playsinline muted loop>
            <source src="<?php echo $block['mobile_video']['url']?>" type="video/mp4">
    </video>

    </div>

        <img class="arrow arrow-close" src="<?php echo $block['close']['url'];?>">

</div>


<script>
        function setCookie(c_name,value,exdays){var exdate=new Date();exdate.setDate(exdate.getDate() + exdays);var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());document.cookie=c_name + "=" + c_value;}
        function getCookie(c_name){var c_value = document.cookie;var c_start = c_value.indexOf(" " + c_name + "=");if (c_start == -1){c_start = c_value.indexOf(c_name + "=");}if (c_start == -1){c_value = null;}else{c_start = c_value.indexOf("=", c_start) + 1;var c_end = c_value.indexOf(";", c_start);if (c_end == -1){c_end = c_value.length;}c_value = unescape(c_value.substring(c_start,c_end));}return c_value;}
        function delCookie(name){document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';}

          //Checks if the cookie already exists
          if (!getCookie('firsttime')){
              //Runs the code because the cookie doesn't exist and it's the user's first time
              $(".video-container").show();
              
              //Set's the cookie to true so there is a value and the code shouldn't run again.
          }
          $(".arrow-close").click(function(){
            $(".video-container").fadeOut();
            setCookie('firsttime',true);
          })

          

</script>

