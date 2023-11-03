<style>
/* Import your CSS files here */
  @import '@/assets/assets/lib/animate/animate.min.css';
  @import '@/assets/assets/lib/owlcarousel/assets/owl.carousel.min.css';
  @import '@/assets/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css';
  @import '@/assets/assets/css/style.css';
  @import '@/assets/assets/css/bootstrap.min.css';

  @import url('https://fonts.googleapis.com');
  @import url('https://fonts.gstatic.com');
  @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');

  @import url('https://code.jquery.com/jquery-3.4.1.min.js');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
</style>

<script>
  export default {
    name: "Style",
  mounted() {
      this.loadScripts();
  },
  methods: {
      loadScripts() {
        const scriptUrls = [
        '/public/js/main.js',

        '/assets/assets/lib/wow/wow.min.js',
        '/assets/assets/lib/easing/easing.min.js',
    '/assets/assets/lib/waypoints/waypoints.min.js',
    '/assets/assets/lib/owlcarousel/owl.carousel.min.js',
    '/assets/assets/lib/tempusdominus/js/moment.min.js',
    '/assets/assets/lib/tempusdominus/js/moment-timezone.min.js',
    '/assets/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',

        ];

        const head = document.getElementsByTagName('head')[0];

        scriptUrls.forEach((scriptUrl) => {
          const script = document.createElement('script');
          script.src = scriptUrl;
          script.async = true;
          head.appendChild(script);
        });
      },
  
    },
  };
</script>
