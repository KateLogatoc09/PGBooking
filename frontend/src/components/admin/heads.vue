<style>
/* Import your CSS files here 
  @import '@/assets/assets/admin/plugins/fontawesome-free/css/all.min.css';
  @import '@/assets/assets/admin/dist/css/adminlte.min.css';

  @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');
  @import url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');*/
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
        'assets/assets/admin/plugins/jquery/jquery.min.js',
        'assets/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'assets/assets/admin/dist/js/adminlte.js',
        'assets/assets/admin/plugins/chart.js/Chart.min.js',
        'assets/assets/admin/dist/js/demo.js',
        'assets/assets/admin/dist/js/pages/dashboard3.js',
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
