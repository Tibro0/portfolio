<footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="sitename">{{date('Y')}}.</strong> <span>All Rights Reserved.</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        @foreach ($socialIcons as $socialIcon)
        <a target="_blank" href="{{ $socialIcon->url }}"><i class="{{ $socialIcon->icon }}"></i></a>
        @endforeach
      </div>
      <div class="credits">
        Designed by <a target="_blank" href="https://www.facebook.com/faysaltibro">MD. Faysal Hossain Tibro</a>
      </div>
    </div>
  </footer>
