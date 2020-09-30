 <footer class="ftco-footer ftco-section img">
   <div class="overlay"></div>
   <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <div class="fb-page" data-href="https://www.facebook.com/CongCaphe" data-tabs="events" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CongCaphe" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CongCaphe">Cong Caphe</a></blockquote></div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://www.facebook.com/nghiaminh21/"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/phinongne/"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Recent Blog</h2>
            @foreach ($blogList as $item)
            <div class="block-21 mb-4 d-flex">
              <a href="{{ route('show-blogdetail', $item->id) }}" class="blog-img mr-4" style="background-image: url({{ $item->link_image }});"></a>
              <div class="text">
                <h3 class="heading"><a class="slow" href="{{ route('show-blogdetail', $item->id) }}">{{ $item->content }}</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> {{ $item->created_at }}</a></div>
                  <div><a href="#"><span class="icon-person"></span> {{ $item->name }}</a></div>
                  <div><a href="#"><span class="icon-chat"></span> </a></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
         <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Services</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Cooked</a></li>
            <li><a href="#" class="py-2 d-block">Deliver</a></li>
            <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
            <li><a href="#" class="py-2 d-block">Mixed</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
         <h2 class="ftco-heading-2">Have a Questions?</h2>
         <div class="block-23 mb-3">
           <ul>
             <li><a href=""><span class="icon icon-map-marker"></span><span class="text">{{getConfigValueSettingTable('addressDetail_contact')}}</span></li>
               <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{getConfigValueSettingTable('phone_contact')}}</span></a></li>
               <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{getConfigValueSettingTable('email_contact_1')}}</span></a></li>
               <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{getConfigValueSettingTable('email_contact_2')}}</span></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
      <div class="col-md-12 text-center">
        <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/phinongne/" target="_blank">{{getConfigValueSettingTable('Made-by_footer')}}</a></p>
        </div>
      </div>
    </div>
  </footer>
  