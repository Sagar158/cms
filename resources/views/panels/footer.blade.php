<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span class="left"><a style="color: white;font-weight: bold;" href="https://dekam.co/"
          target="_blank">Powered by DEKAMCO</a>
      </span>
      <span class="right hide-on-small-only" style="color: white;font-weight: bold;">
        © 2020 Clean Credit Crew | Version 1.0.0 | <a href="https://dekam.co/cms/">Documentation | Change Log</a> 
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->
