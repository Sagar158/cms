<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span class="left"><a style="color: white;font-weight: bold;" href="#"
          target="_blank">POWERED BY DEKAMCO</a>
      </span>
      <span class="right hide-on-small-only" style="color: white;font-weight: bold;">
        VERSION V1 | (C) 2020 CLEAN CREDIT CREW 
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->