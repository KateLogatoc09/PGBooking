<style>
/* Import your CSS files here */
@import '@/assets/assets/css/sb-admin-2.min.css';
@import '@/assets/assets/css/sb-admin-2.css';
@import url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');

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
        '/public/js/sb-admin-2.min.js',
        '/public/js/sb-admin-2.js',

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
